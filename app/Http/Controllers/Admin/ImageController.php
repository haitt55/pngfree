<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Google_Service_Drive_DriveFile;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manage.image_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'             => 'required|max:255',
            'category_id'             => 'required',
            'description' => 'required',
            'thumb_file'             => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput($request->all());
        }
        $image = new Image();
        $image->title = $request->get('title');
        $image->slug = $this->slugify($request->get('title'));
        $image->description = $request->get('description');
        $image->category_id = $request->get('category_id');
        $image->meta_description = $request->get('meta_description');
        $image->meta_keywords = $request->get('meta_keywords');
        $image->meta_title = $request->get('meta_title');
        if ($request->get('tag_id')) {
            $image->tag_id = implode(',', $request->get('tag_id'));
        } else {
            $image->tag_id = 1;
        }
        $client = new \Google_Client();
        $client->setClientId(env('GOOGLE_DRIVE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_DRIVE_CLIENT_SECRET'));
        $client->refreshToken(env('GOOGLE_DRIVE_REFRESH_TOKEN'));
        $service = new \Google_Service_Drive($client);

        $imageName = $this->generateRandomString(10);
        if ($request->file('thumb_file')) {
            $thumbFile = new Google_Service_Drive_DriveFile(array('name' => $imageName.'.'.$request->file('thumb_file')->getClientOriginalExtension()));
            $resultThumb = $service->files->create(
                $thumbFile,
                array(
                    'data' => file_get_contents($request->file('thumb_file')),
                    'mimeType' => 'application/octet-stream',
                    'uploadType' => 'media'
                )
            );
            $image->thumb = $resultThumb->id;
        }
        if ($request->file('jpg_file')) {
            $jpgFile = new Google_Service_Drive_DriveFile(array('name' => $imageName.'.'.$request->file('jpg_file')->getClientOriginalExtension()));
            $resultThumb = $service->files->create(
                $jpgFile,
                array(
                    'data' => file_get_contents($request->file('jpg_file')),
                    'mimeType' => 'application/octet-stream',
                    'uploadType' => 'media'
                )
            );
            $image->jpg_link = $resultThumb->id;
        }
        $image->save();
        Session::flash('success', 'create image success!');
        return redirect()->route('admin.listAdminImage');
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString.time();
    }

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function listAdminImage(Request $request)
    {
        return view('admin.manage.list_image');
    }
}
