<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->from('info@bluemarlin.ae')->subject('New Cv')->
//        view('dynamic_email_template')->
//        with('data', $this->data);
        // return $this->view('view.name');

        $data = $this->data;
        return $this->subject('subject email')->
        view('dynamic_email_template',compact('data'))->
            attach($this->data['cv']->getRealPath(),[
                'as' => $this->data['cv']->getClientOriginalName()
        ]);
    }
}
