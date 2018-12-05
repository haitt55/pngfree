<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        putenv('GOOGLE_APPLICATION_CREDENTIALS='.base_path('projectyoutubeplaylist-1322-82b50f954e54.json'));
        $client = new \Google_Client([
            'auth' => 'google_auth'
        ]);
        $client->addScope(\Google_Service_Drive::DRIVE);
        $client->useApplicationDefaultCredentials();
        $fileMetadata = new \Google_Service_Drive_DriveFile(array(
            'name' => 'photo.jpg'));
        $content = file_get_contents($request->file('jpg_file'));
        $service = new \Google_Service_Drive($client);
        $file = $service->files->create($fileMetadata, array(
            'data' => $content,
            //'mimeType' => 'image/jpeg',
            'uploadType' => 'multipart',
            'fields' => 'id'));
        dd($file);


        return true;
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
