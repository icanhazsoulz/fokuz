<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    public function show($page)
    {
        abort_unless(View::exists('pages.'.$page), 404);

        return view('pages.'.$page);
    }
}
