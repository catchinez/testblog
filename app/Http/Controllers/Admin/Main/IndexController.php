<?php

namespace App\Http\Controllers\Admin\Main;


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function __invoke()
    {

        return view('admin.main.index');
    }
}
