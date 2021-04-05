<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Schedule implements Rule
{
    protected $schedule; 

    public function __construct($schedule = null)
    {
        $this->schedule = $schedule;
    }


    public function passes($attribute, $value)
    {
        //
    }
    public function message()
    {
        return 'The validation error message.';
    }
}
