<?php

namespace App\Http\Controllers\Personal\Liked;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function __invoke()
    {
        return view('personal.liked.index');
    }
}
