<?php

namespace App\Http\Controllers;

use App\Jobs\NotifyMail;

class EnrollmentController extends Controller
{
    //
    public function sendNotification(){

        NotifyMail::dispatch()
                    ->delay(now()->addSeconds(5));
    }
}
