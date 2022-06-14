<?php

namespace App\Http\Controllers\Personal\Comment;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;


class EditController extends Controller
{
    public function __invoke(Comment $comment)
    {

        return view('personal.comment.edit', compact('comment'));
    }
}
