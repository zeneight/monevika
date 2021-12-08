<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\AdminTbMonitoringDomainController as Amd;

class CekWeb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom:cekweb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Perintah untuk mengecek website';

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
     * @return int
     */
    public function handle()
    {
        $AmdClass = new Amd();
        return $AmdClass->getCek();
    }
}
