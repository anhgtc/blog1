<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.users_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        $users->name = $request->name;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();
        $details = [
            'tittle'=>'Mail send from Long',
            'body'=>'Test mail'
        ];

        Mail::to($request->email)->send(new SendMail($details));
        return redirect()->action([UserController::class, 'viewLogin']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function viewLogin()
    {
        return view('users.users_login');
    }
    public function confirmLogin(Request $request)
    {
        if ($request->username == 'admin' && $request->password == '12345')
        return redirect()->action([ContactController::class, 'create']);
        return redirect()->action([UserController::class, 'viewLogin']);
    }
}
