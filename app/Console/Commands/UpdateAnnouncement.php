<?php

namespace App\Console\Commands;

use App\Report_crime;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\User;
use Carbon;

class UpdateAnnouncement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UpdateAnnouncement:updateannouncement';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update timestamp';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

       $now =  \Carbon\Carbon::now();
      $crime = Report_crime::find(1);
       if($crime= $now){
         $crime->status =2;
         $crime->save();
    }
  }
}
