<?php

namespace App\Services;

use Illuminate\Mail\Mailer;
use Psr\Log\LoggerInterface;
use Illuminate\Mail\Message;

class ContactUsMailer
{
    private Mailer $infrastructureMailer;
    private LoggerInterface $logger;

    public function __construct(Mailer $infrastructureMailer, LoggerInterface $logger)
    {
        $this->infrastructureMailer = $infrastructureMailer;
        $this->logger = $logger;
    }
    public function send(array $data): void
    {
        $this->infrastructureMailer->send(
            'emails.contactUs',
            [
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'tel' => $data['tel'],
                'sex' => $data['sex'],
                'membership' => $data['membership'],
                'sport' => $data['sport'],
                'coach' => $data['coach'],
                'messageText' => $data['message'],

            ],
            function (Message $message) use ($data) {
                $message->subject('message from ' . $data['email']);
                $message->to('joinus@power.com');
                $message->from('no-reply@power.com', 'Power mailer');
            }
        );
        $this->logger->info('Contact Us mail send to joinus@power.com');
    }
}
