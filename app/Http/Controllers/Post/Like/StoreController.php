<?php

namespace App\Http\Controllers\Post\Like;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\User;
use App\Models\Like;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;


class StoreController extends Controller
{
    public function __invoke(Post $post)
    {

        auth()->user()->likedPosts()->toggle($post->id);


        return redirect()->back();
    }
}
