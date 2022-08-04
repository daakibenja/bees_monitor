<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Audio;
use App\Models\Video;
use App\Models\Parameter;

class ImageController extends Controller
{
    public function create(Request $request){
        $images = new Image();
        $request -> validate([
            'title'=>'required',
            'image'=>'required|max:1024'
        ]);
        $filename = "";
        if($request->hasFile('image')){
            $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);
        } else {
            $filename = Null;
        }
        $images->title = $request->title;
        $images->image = $newImageName;
        $result = $images->save();

        if ($result) {
            return response()->json(['success'=>true]);
        } else {
            return response()->json(['success'=>false]);
        }
    }
    public function createVideo(Request $request){
        $images = new Video();
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required',
      ]);
      $images->title = $request->title;
      if ($request->hasFile('video'))
      {
        $newImageName = time() . '-' . $request->name . '.' . $request->video->extension();
        $request->video->move(public_path('videos'), $newImageName);
       $images->video = $newImageName;
      }
      $result = $images->save();

        if ($result) {
            return response()->json(['success'=>true]);
        } else {
            return response()->json(['success'=>false]);
        }
    }
    public function get(){
        $images = Image::orderBy('id', 'DESC')->get();
        return response()->json($images);
    }
    public function audio(Request $request){
        $audios = new Audio();
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'audio' => 'required',
      ]);
      $audios->title = $request->title;
      if ($request->hasFile('audio'))
      {
        $newaudioName = time() . '-' . $request->name . '.' . $request->audio->extension();
        $request->audio->move(public_path('audios'), $newaudioName);
       $audios->audio = $newaudioName;
      }
      $result = $audios->save();

        if ($result) {
            return response()->json(['success'=>true]);
        } else {
            return response()->json(['success'=>false]);
        }
    }
    public function params(Request $request){
        $parameters = new Parameter();
        $this->validate($request, [
            'weight' => 'required',
            'temperature' => 'required',
            'humidity' => 'required',
      ]);
      $parameters->weight = $request->weight;
      $parameters->temperature = $request->temperature;
      $parameters->humidity = $request->humidity;
      $parameters->time = $request->time;
      $result = $parameters->save();

        if ($result) {
            return response()->json(['success'=>true]);
        } else {
            return response()->json(['success'=>false]);
        }
    }
    
}
