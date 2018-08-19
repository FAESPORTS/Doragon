<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
  
    public function index()
    {
        return News::get();
    }

    public function store(Request $request)
    {
        $new = new News();
        $new -> user_id = $request -> user_id;
        $new -> title = $request -> title;
        $new -> text = $request -> text;
        $new -> photo_url = $request -> photo_url;
        $new->save();
    }

    public function show($id)
    {
        return   $new = News::find($id);
    }

    public function update(Request $request, $id)
    {
      $new = News::find($id);
      $new -> title = $request -> title;
      $new -> text = $request -> text;
      $new -> photo_url = $request -> photo_url;
      $new->save();
    }


    public function destroy($id)
    {
          $new = News::find($id);
          $new->delete();
    }
}
