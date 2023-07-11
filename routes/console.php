<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


// Closure Commands
Artisan::command('gretting:send {user}', function (string $user) {
    $this->info("Sending greetings to: {$user}!");
    $this->info("Hello {$user}!");
});

// Php artisan list karvathi je list male che aema je discription type nu ave che aene j purpose kevay che aetale {php artisan mail:send Dhenish} aa command run karsu to this thi je info ma che ae avse and Purpose karine lakhyu che ae {Php artisan list} karsu tya mail:send ni same batavse
Artisan::command('mail:send {user}', function (string $user) {
    $this->info("Hello {$user}!");
})->purpose('Send a marketing email to a user');
