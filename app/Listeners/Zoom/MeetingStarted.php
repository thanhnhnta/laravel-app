<?php


namespace App\Listeners\Zoom;

use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\WebhookClient\Models\WebhookCall;

class MeetingStarted implements ShouldQueue
{
    public function handle(WebhookCall $webhookCall)
    {
        // do your work here

        // you can access the payload of the webhook call with `$webhookCall->payload`
    }
}
