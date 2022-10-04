<?php

namespace Rogovaya_d\LaraAscii\Controller;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showForm()
    {
        return View::make('ascii::upload_form');
    }
}