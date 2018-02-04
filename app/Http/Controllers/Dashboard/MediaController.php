<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Auth;
use App\Media;
use File;
use Storage;
use Validator;
use DB;
//use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic as Image;


class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::all();
        $user = Auth::user();
        $events = Event::all();

        return view('dashboard/media', [
            'media' => $media,
            'user' => $user,
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $media = Media::all();
        $user = Auth::user();
        $events = Event::all();

        return view('dashboard/media_add', [
            'media' => $media,
            'user' => $user,
            'events' => $events
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'media' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $media = "";

        $user = Auth::user();

        if($request->hasFile('media'))
        {
            $destination_path = 'media_library';
            $file = $request->file('media');
            $extension = strtolower($file->getClientOriginalExtension());
            $filename_original = $file->getClientOriginalName();
            $mime_type = $file->getClientMimeType();
            $filename = $user->id .'-'. date("Y-m-d-h:i:sa") .'.'. $extension;

            $img = Image::make($file->getRealPath());

            $img->resize(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('/'.$destination_path).'/'.$filename);

            $media_item = new Media;
            $media_item->name = $filename_original;
            $media_item->filename_original = $filename_original;
            $media_item->filename = $filename;
            $media_item->type = $extension;
            $media_item->description = $mime_type;
            $media_item->active = 1;
            $media_item->location = $destination_path;
            $media_item->created_by = $user->id;
            $media_item->save();

        }

        return redirect('dashboard/media')->with('status', 'Success');
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
}
