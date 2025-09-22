<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\User;
use Webmozart\Assert\Assert;

class TestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sendEmail()
    {
        $user = User::where('email', 'denis909@mail.ru')->first();

        Assert::notEmpty($user, 'User not found.');

        $response = Mail::to($user)->send(new TestMail());
       
        echo '<pre>';

        var_dump($response); 
    }
}
