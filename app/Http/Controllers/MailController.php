<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\UserController;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $details = [
            'tittle'=>'Mail send from Long',
            'body'=>'Test mail'
        ];

        Mail::to($request->email)->send(new SendMail($details));
        return redirect()->action([UserController::class, 'store']);
    }

}
