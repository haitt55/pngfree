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
        $moreImages = Image::getAllImagesByCategory($image->category_id);
        return view('front.images.detail')->with(array(
            'image'      => $image,
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
        if ($downloadTimes && $downloadTimes->download_number) {
            $downloadNumber = $downloadTimes->download_number;
            $canDownload = 1;
            // download image
            $filename = $this->getFileName($request->get('id'), $request->get('type'));
            $extension = $this->getFileExtension($request->get('type'));
            // get file to download folder
            file_put_contents("download/image.".$extension, fopen($filename, 'r'));
            $tempImage = tempnam(sys_get_temp_dir(), "image.".$extension);
            copy(public_path().'/download/image.'.$extension, $tempImage);

            // update download number
            $downloadNumber = $downloadNumber - 1;
            DB::table('download_times')->where('user_id', auth()->user()->id)->update(['download_number' => $downloadNumber]);

            // download file
            return response()->download($tempImage, 'download.'.$extension);
        } else {
            return view('images.download');
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
        return $image->$linkField;
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
