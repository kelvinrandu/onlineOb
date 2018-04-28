<?php

namespace App\Listeners;

use App\Events\assign;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Event;

class assingListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  assign  $event
     * @return void
     */
    public function handle(assign $event)
    {
      // $event = Event::find($event->id);
      //
      //    $event->status = 1;
      //    $event->save();
    
      print_r($Now);
    }

}
