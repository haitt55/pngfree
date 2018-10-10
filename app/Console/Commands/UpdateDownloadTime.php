<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateDownloadTime extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:DownloadTime';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update dowload time to 3 every days';

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
        // update normal user
        DB::table('download_times')->leftJoin('users', 'users.id', '=', 'download_times.user_id')
            ->whereNull('users.payment_expire')
            ->orWhere('users.payment_expire', '<', now())
            ->update(['download_number' => 3]);
        // update vip user 1
        DB::table('download_times')->leftJoin('users', 'users.id', '=', 'download_times.user_id')
            ->where('users.payment_expire', '>', now())
            ->whereIn('users.payment_id', array(User::TYPE_1_1, User::TYPE_1_6, User::TYPE_1_12))
            ->update(['download_number' => User::TYPE_1]);
        // update vip user 2
        DB::table('download_times')->leftJoin('users', 'users.id', '=', 'download_times.user_id')
            ->where('users.payment_expire', '>', now())
            ->whereIn('users.payment_id', array(User::TYPE_2_1, User::TYPE_2_6, User::TYPE_2_12))
            ->update(['download_number' => User::TYPE_2]);
    }
}
