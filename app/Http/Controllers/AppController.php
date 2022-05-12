<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class Appcontroller extends Controller
{
  public function index(App $)
  {
    return view('index')->with(['posts' =>$post->getPaginateByLimit()]);
    
  }
  public function store( Post $Club,ClubRequest $request)
    {
    $input = $request['Club'];
    $post->fill($input)->save();
    return redirect('/posts/' . $Club->id);
    }
}

