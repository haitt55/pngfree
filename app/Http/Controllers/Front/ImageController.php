<?php

namespace App\Http\Controllers\Front;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Helpers\General;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    public function __construct()
    {
        //
    }

    public function detail($categoryPrefix, $imageSlug)
    {
        $image      = Image::findBySlug($imageSlug);
        $category = Category::find($image->category_id);
        $moreImages = Image::getAllImagesByCategory($image->category_id);
        return view('front.images.detail')->with(array(
            'image'      => $image,
            'category'      => $category,
            'moreImages' => $moreImages,
        ));
    }

    public function download(Request $request)
    {
        if (!$request->get('id') || !$request->get('type')) {
            abort(404);
        }

        if (!auth()->user()) {
            abort(404);
        }

        // check download number
        $downloadTimes = DB::table('download_times')->where('user_id', auth()->user()->id)->first();
        $downloadNumber = 0;
        $canDownload = 0;
        try {
            if ($downloadTimes && $downloadTimes->download_number) {
                $downloadNumber = $downloadTimes->download_number;
                $canDownload = 1;
                // download image
                list($fileId, $fileName) = $this->getFileName($request->get('id'), $request->get('type'));
                $extension = $this->getFileExtension($request->get('type'));
                // get file to download folder

                // update download number
                $downloadNumber = $downloadNumber - 1;
                DB::table('download_times')->where('user_id', auth()->user()->id)->update(['download_number' => $downloadNumber]);

                // download file
                putenv('GOOGLE_APPLICATION_CREDENTIALS='.base_path('projectyoutubeplaylist-1322-82b50f954e54.json'));
                $client = new \Google_Client([
                    'auth' => 'google_auth'
                ]);
                $client->addScope(\Google_Service_Drive::DRIVE);
                $client->useApplicationDefaultCredentials();
                $service = new \Google_Service_Drive($client);
                $response = $service->files->get($fileId, array('alt' => 'media'));
                $headers = $response->getHeaders();
                if ($headers['Content-Type'][0] == 'application/x-zip-compressed') {
                    $extension = 'zip';
                }
                if ($headers['Content-Type'][0] == 'application/x-zip-compressed' || $headers['Content-Type'][0] == 'application/x-rar') {
                    $extension = 'rar';
                }
                header("Pragma: public");
                header("Expires: 0");
                header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Type: application/zip");
                header("Cache-Control: no-store, no-cache");
                header("Content-Transfer-Encoding: binary");
                header('Content-Disposition: attachment; filename="'.$fileName.'.'.$extension.'"');
                echo $response->getBody()->getContents();
            } else {
                return view('images.download');
            }
        } catch (\Exception $e) {
            abort(404);
        }
    }

    public function getFileName($id, $type)
    {
        $linkField = 'png_link';
        switch($type) {
            case Image::TYPE_PNG:
                $linkField = 'png_link';
                break;
            case Image::TYPE_PSD:
                $linkField = 'psd_link';
                break;
            case Image::TYPE_AI:
                $linkField = 'ai_link';
                break;
            case Image::TYPE_JPG:
                $linkField = 'jpg_link';
                break;
            case Image::TYPE_EPS:
                $linkField = 'eps_link';
                break;
            case Image::TYPE_PPT:
                $linkField = 'ppt_link';
                break;
            case Image::TYPE_SVG:
                $linkField = 'svg_link';
                break;
            default:
                break;
        }
        $image = Image::find($id);
        return array($image->$linkField, $image->slug);
    }

    public function getFileExtension($type)
    {
        $extention = 'png';
        switch($type) {
            case Image::TYPE_PNG:
                $extention = 'png';
                break;
            case Image::TYPE_PSD:
                $extention = 'psd';
                break;
            case Image::TYPE_AI:
                $extention = 'ai';
                break;
            case Image::TYPE_JPG:
                $extention = 'jpg';
                break;
            case Image::TYPE_EPS:
                $extention = 'eps';
                break;
            case Image::TYPE_PPT:
                $extention = 'ppt';
                break;
            case Image::TYPE_SVG:
                $extention = 'svg';
                break;
            default:
                break;
        }
        return $extention;
    }
}
