<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Log;

class TestTwo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crontab:testT';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        while(1){
            Log::info('守护进程2:'.time());
            sleep(11);
        }
    }
}
