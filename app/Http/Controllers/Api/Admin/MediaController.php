<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuccessResource;
use App\Models\Gallery;
use App\Models\Media;
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
        //
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
                }
            }
        }
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses.',
            'api_results' => $media
        ];
        return SuccessResource::make($return);
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
        $newmedia = Media::find($media->id);
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses.',
            'api_results' => $newmedia
        ];
        return SuccessResource::make($return);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $return = [
            'api_code' => 200,
            'api_status' => true,
            'api_message' => 'Sukses Terhapus.',
            'api_results' => $media
        ];
        $media->delete();
        return SuccessResource::make($return);
    }
}
