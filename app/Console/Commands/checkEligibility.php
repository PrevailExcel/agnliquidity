<?php

namespace App\Console\Commands;

use App\User;
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
        $user = auth()->user();
        $dt = Carbon::parse($user->paid_on);
        $dueDate = $dt->addDays(30);
        if ($dueDate == Carbon::today())
        User::where('id', $user->id)->update(array('is_eligible', 1));
        return 0;
    }
}
