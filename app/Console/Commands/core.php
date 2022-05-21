<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class core extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'core:make {option: Controller, Model } {}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is core Command';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return 0;
    }
}
