<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Person;

class MyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    public function handle()
    {
        $suffix = '[+MYJOB]';
        if (strpos($this->person->name, $suffix)) {
            $this->person->name = str_replace($suffix, '', $this->person->name);
        } else {
            $this->person->name .= $suffix;
        }
        $this->person->timestamps = false;
        $this->person->save();
    }
}
