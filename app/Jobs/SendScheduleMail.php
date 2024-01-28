<?php

namespace App\Jobs;

use App\Mail\ScheduleMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendScheduleMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new job instance.
     */
    public function __construct($scheduleData)
    {
        $this->data = $scheduleData;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $email = env('COMPANY_MAIL');
        Mail::to($email)->send(new ScheduleMail($this->data));
    }
}
