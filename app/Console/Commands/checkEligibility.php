<?php

namespace App\Console\Commands;

use App\Connect;
use Carbon\Carbon;
use Illuminate\Console\Command;

class checkEligibility extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:eligibility';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks if the user is eligible to be paid after a month';

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
        $users = Connect::all();
        foreach($users as $user){
        $dt = Carbon::parse($user->created_at)->format('d M, Y');
        $dueDate = $dt->addDays(31)->format('d M, Y');
        if ($dueDate == Carbon::today()->format('d M, Y'));
        Connect::where('id', $user->id)->update(['is_eligible' => 1]);
        return 0;
        }
        return 0;
    }
}
