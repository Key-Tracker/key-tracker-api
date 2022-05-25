<?php

namespace App\Domains\Vocation\Jobs;

use Lucid\Units\Job;
use App\Data\Models\Vocation;

class GetVocationsJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Vocation::with('company')->paginate(5);
    }
}
