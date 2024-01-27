<?php

namespace App\Jobs;

use App\Http\Requests\RequestContactUs;
use App\Mail\ContactUsMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactUsMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct(RequestContactUs $request)
    {
        $this->data = $request->input();
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email = env('COMPANY_MAIL');
        Mail::to($email)->send(new ContactUsMail($this->data));
    }
}
