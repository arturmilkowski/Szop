<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        return view('page.page.index');
    }

    public function about(): View
    {
        return view('page.page.about');
    }
}
