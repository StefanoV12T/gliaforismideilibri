<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;


class QueueStartController extends Controller
{
    // exec('php artisan queue:work');
    public function runResizeImage(Request $request){
        // exec("nohup php artisan queue:work");
        // dd("merda");
        //ResizeImage::dispatchSync();
        Artisan::call('queue:work --stop-when-empty');
        // Artisan::call('queue:work')->runInBackground();
        
        echo "ciao";
        // ResizeImage::dispatch();
    //  Artisan::call('schedule:run')->runInBackground();
    //Schedule::exec('php artisan queue:work')->everyThirtySeconds()->runInBackground();

       ;
    }
}
