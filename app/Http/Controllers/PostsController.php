<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Posts;
use App\User;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function showPostsList(){
        $posts = Posts::all();
        $arData = array();
        if($posts != null){
            foreach($posts as $post){
                $arUser = User::find($post->id);
                $arData[] = array(
                  'id'     => $post->id,
                  'author' => isset($arUser) ? $arUser->name : 'Admin',
                  'title'  => $post->title,
                  'date'   => date($post->created_at),
                  'likes'   => $post->likes
                );
            }
            return View('admin.posts')->with('lists', $arData);
        }

    }

}
