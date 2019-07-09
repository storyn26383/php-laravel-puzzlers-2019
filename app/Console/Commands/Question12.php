<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Question12 extends Command
{
    protected $signature = 'Question12';

    public function handle()
    {
        // $array = [[1, 0], 1, 0];
        // $callback = function (&$value) use (&$callback) {
        //     if (is_array($value)) {
        //         $value = array_filter($value, $callback);
        //     }

        //     return $value;
        // };

        // echo json_encode(array_filter($array, $callback));

        // A) [[],1]
        // B) [[1],1]
        // C) [[1,0],1]
        // D) None of the above
    }
}
