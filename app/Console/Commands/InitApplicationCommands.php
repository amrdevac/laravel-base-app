<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InitApplicationCommands extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'amr:init-app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menginisiasikan aplikasi saat pertamakali di jalankan';

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
        $this->info('Migrasi Seluruh table ke dalam database, pastikan database telah tersedia');
        Artisan::call("migrate:fresh");

        $this->info("Menyimpan data dummy user admin \n username:admin \n password:password ");
        Artisan::call("db:seed InitApplicationSeeder");
    }
}
