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
            return [
                'status' => 0,
                'message' => 'Item not found'
            ];
        }
        if (!auth()->user() || !auth()->user()->is_active) {
            return [
                'status' => 0,
                'message' => 'Item not found'
            ];
        }

        // check download number
        $downloadTimes = DB::table('download_times')->where('user_id', auth()->user()->id)->first();
        if (!$downloadTimes ||
            !$downloadTimes->download_number ||
            $downloadTimes->download_number < 0
        ) {
            return [
                'status' => 0,
                'redirect' => route('image.download.limit')
            ];
        }

        // download image
        $driveId = $this->getFileName($request->get('id'), $request->get('type'));
        if (!$driveId) {
            return [
                'status' => 0,
                'message' => 'Link not found'
            ];
        }
        $link = General::getShortLink($driveId);
        if (!$link) {
            return [
                'status' => 0,
                'message' => 'Link not found'
            ];
        }
        try {
            DB::table('download_times')
                ->where('user_id', auth()->user()->id)
                ->update(['download_number' => $downloadTimes->download_number - 1]);
        } catch (\Exception $e) {
            \Log::error($e);
            return [
                'status' => 0,
                'message' => 'System error'
            ];
        }
        return [
            'status' => 1,
            'link' => $link
        ];
    }

    public function limitNumberDownload()
    {
        return view('images.download');
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
        if (!$image) {
            return null;
        }
        return $image->{$linkField};
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
