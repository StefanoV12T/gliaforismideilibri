<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;


class QueueStartController extends Controller
{
    public function runResizeImage(Request $request)
    {
        Artisan::call('queue:work --stop-when-empty');
    }
}
