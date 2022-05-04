<?php

namespace App\Http\Controllers;

use App\Club;
use 
use Illuminate\Http\Request;

class Appcontroller extends Controller
{
  public function index(App $)
  {
    return view('index')->with(['posts' =>$post->getPaginateByLimit()]);
    return view('posts/index') ->with(['posts' => $Club->getByLimit()]);
    Route::get('/posts/create', 'AppController@create');
  }
}

public function store( Post $Club,ClubRequest $request)
{
    $input = $request['Club'];
    $post->fill($input)->save();
    return redirect('/posts/' . $Club->id);
}