<?php

namespace Webkul\CustomWorkflow\Listeners;

use Illuminate\Support\Facades\Mail;
use Webkul\CustomWorkflow\Mail\CustomWorkflow;

class Lead
{
    public function update($lead)
    {
        Mail::queue(new CustomWorkflow($lead->user)); 
    }
}