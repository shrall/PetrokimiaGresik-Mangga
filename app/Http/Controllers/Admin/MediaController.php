<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Media;
use App\Models\MediaType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Media::all();
        return view('admin.media.index', compact('medias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = MediaType::all();
        return view('admin.media.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('banner')) {
            $banner = 'media-banner-' . time() . '-' . $request['banner']->getClientOriginalName();
            $request->banner->move(public_path('uploads/media/banners'), $banner);
        } else {
            $banner = null;
        }
        $media = Media::create([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'content' => $request->content ?? '',
            'banner' => $banner,
            'user_id' => Auth::id(),
        ]);
        if ($request->type_id == 2) {
            foreach ($request->gallery as $key => $value) {
                if ($request->has('gallery')) {
                    $gallery = 'media-gallery-' . time() . '-' . $value->getClientOriginalName();
                    $value->move(public_path('uploads/media/gallery'), $gallery);
                    Gallery::create([
                        'path' => $gallery,
                        'media_id' => $media->id
                    ]);
                } else {
                }
            }
        }
        return redirect()->route('admin.media.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        $types = MediaType::all();
        return view('admin.media.edit', compact('media', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        if ($request->has('banner')) {
            $banner = 'media-banner-' . time() . '-' . $request['banner']->getClientOriginalName();
            $request->banner->move(public_path('uploads/media/banners'), $banner);
        } else {
            $banner = $media->banner;
        }
        $media->update([
            'name' => $request->name,
            'type_id' => $request->type_id,
            'content' => $request->content,
            'banner' => $banner,
            'user_id' => Auth::id(),
        ]);
        if ($request->type_id == 2) {
            if ($request->has('gallery')) {
                foreach ($media->galleries as $ga) {
                    $ga->delete();
                }
                foreach ($request->gallery as $key => $value) {
                    $gallery = 'media-gallery-' . time() . '-' . $value->getClientOriginalName();
                    $value->move(public_path('uploads/media/gallery'), $gallery);
                    Gallery::create([
                        'path' => $gallery,
                        'media_id' => $media->id
                    ]);
                }
            }
        }
        return redirect()->route('admin.media.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();
        return redirect()->route('admin.media.index');
    }

    public function upload_photo_content(Request $request)
    {
        if ($request->has('upload')) {
            $upload = 'media-' . time() . '-' . $request['upload']->getClientOriginalName();
            $request->upload->move(public_path('uploads/media/images'), $upload);
        } else {
            $upload = null;
        }
        return response()->json([
            "uploaded" => true,
            'url' => config('app.url')  . '/uploads/media/images/' .  $upload,
        ]);
    }
}
