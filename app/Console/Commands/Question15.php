<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Pipeline\Pipeline;

class Question15 extends Command
{
    protected $signature = 'Question15';

    public function handle()
    {
        // $foo = function ($passable, $next) {
        //     echo 2;
        //     $next($passable);
        // };

        // $bar = function ($passable, $next) {
        //     $next($passable);
        //     echo 3;
        //     $next($passable);
        // };

        // app(Pipeline::class)->send(1)
        //                     ->through($foo, $bar)
        //                     ->then(function ($passable) {
        //                         echo $passable;
        //                     });

        // A) 213
        // B) 321
        // C) 2131
        // D) 3212
    }
}
