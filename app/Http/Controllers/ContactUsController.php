<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Mail\Message;

class ContactUsController extends Controller
{
    public function contact()
    {
        return view('contacts.contactUs');
    }

    public function send(ContactUsRequest $request): RedirectResponse
    {
        $callback = function (string $test): string {
            return "{$test} input";
        };

        // dd($request->validated());
        $data = $request->validated();
        \Log::debug($callback('test'), $data);

        \Mail::send(
            'emails.contactUs',
            [
                'email' => $data['email'],
                'name' => $data['name'],
                'messageText' => $data['message'],

            ],
            function (Message $message) use ($data) {
                $message->subject('message from ' . $data['email']);
                $message->to('tech@baloon.app');
                $message->from('no-reply@baloon.app', 'Baloon mailer');
            }
        );

        return redirect()->route('contactUs')->withInput($data);
    }
}
