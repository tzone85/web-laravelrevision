<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
           'name' => 'required|min:3|alpha',
           'email' => 'required|email|min:3'
        ]);

        // create a new message

        $message = new Message;

        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save message
        $message->save();

        // redirect
        return redirect('/')->with('success', 'Message sent');
    }
}
