<?php

namespace App\Http\Controllers\Personal\Liked;


use App\Http\Requests\Admin\Category\UpdateRequest;
use function App\Models\User\likedPosts;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
