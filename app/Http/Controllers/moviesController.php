<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movies;

class moviesController extends Controller
{
    public function movies()
    {
        return view('movies');
    }

    public function AdminPanel()
    {
        $data['value']=movies::all();
        return view('AdminPanel',$data);
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'movie_name' => 'required',
            'release_date' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'video_url' => 'required',
        ]);

        $data = new movies();
        $data->movie_name = $request->movie_name;
        $data->release_date = $request->release_date;
        $data->description = $request->description;
        $data->image_url = $request->image_url;
        $data->video_url = $request->video_url;
        $data->save();
        return redirect('/movie');
    }

}