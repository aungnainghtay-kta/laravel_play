<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class EnrollmentController extends Controller
{
    //
    public function sendNotification(){

        $user = User::first();

        $enrollmentData=[
            'body' => 'Enrollment Body',
            'enroll' => 'Enroll today',
            'url' => url('/'),
            'thankyou' => 'Thank you very much'
        ];

        //$user->notify(new TestEnrollment($enrollmentData));
        Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
