<?php

namespace App\Console\Commands;

use App\Http\Controllers\Controllers;
use App\Http\Controllers\Netsuite;
use Illuminate\Console\Command;
use DB;
class GetUpdateCustomers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Netsuite:updatecustomers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get and update all customers from netsuite';

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


        $service =Netsuite\NetsuiteDatabase::AddUpdateAllCustomers();



    }
}
