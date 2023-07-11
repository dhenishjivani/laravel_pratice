<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\Input;
use App\Models\User;

class TakeInput extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */


    // Normal Command with Arguments
    // protected $signature = 'app:take-input {name}';
    // protected $signature = 'app:take-input {name?}';    // Optional argument mate
    // protected $signature = 'app:take-input {name=Dhenish}';    // Default argument mate


    // Options
    // protected $signature = 'select:option {user} {--takeOption=}';
    // protected $signature = 'select:option {user} {--takeOption=Dhenish}';   // default option
    // Dhayn rakhva jevi babat ama che ne command run karti vakhate --takeOption pan lakhvani jarur nyy jo lakhasu to default value nyyy null return kare
    // shortcut for options
    // protected $signature = 'select:option {user} {--O|takeOption=}';    // ama khali aek j letter hovo joy hoo as a shortcut like apane Ops ke na api saki jya --O karine apyu che tya


    // Multipul Arrguments mate * use thay Input Arrays kay saki
    // protected $signature = 'app:take-input {name*}';
    // 'mail:send {user?*}' optional argument pan hoy sake


    // Options ma pan multipule avi sake che
    // protected $signature = 'select:option {user} {--takeOptions=*}';


    // Prompting For Input
    protected $signature = 'app:take-information';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Normal Command with Arguments
        // echo "Hello User!! How are you ??Please Enter this command'php artisan app:take-input {Your name}'";     // aa white color ma avase baki badhu Green ma avse
        // if($this->argument('name') != null) {
        //     $arg = $this->argument('name');
        // } else {
        //     $arg = 'User';
        // }
        // $this->info("This is $arg's system");
        // $name = $this->ask('What is your name?');
        // $this->info("Welcom $name to $arg's system");


        // Options
        // $queueName = $this->option('takeOption');
        // $this->error($queueName);
        // if ($queueName == 'Dheno') {
        //     $this->info("Hello $queueName");
        // } else {
        //     $this->info("Heyy $queueName");
        // }
        // ShortCut for option
        // Ama che ne command ma khali aek j - no use thay and ae laykha pachi = nyy apvanu ama like --takeoption={name} lakhata aena badle only -O{name} aam that's all


        // Multipul Arrguments
        // if ($this->argument('name')) {
        //     $arr = $this->argument('name');
        //     $string = implode(",", $arr);
        //     $result = $string;
        // }
        // $this->info($result);


        // Take input from user in terminal like name and age or anthing (Prompting For Input)
        // $name = $this->ask('What is your name?');
        // $this->confirm('Do you wish to continue?');
        // $password = $this->secret('Enter your password');
        // $this->info("Your password $password");
        // $this->info("Welcom $name to the my system");
        // $this->anticipate('What is your name?', ['Dhenish', 'Jivani']); // Auto-Completion

        // Multiple Choice Questions
        // $name = $this->choice(
        //     'What is your name?',
        //     ['Dhenish', 'Denish', 'Rutul', 'Helly', 'Mihir', 'Mehul', 'Dhruval', 'Sakshi'],
        // );


        // Writing Output
        // $this->info("Welcome $name to the new world!");
        // $this->error($name);
        // $this->line('Display this on the screen');
        // $this->newLine();  // Write a single blank line...
        // $this->newLine(3);  // Write three blank lines...


        // Tables
        $this->table(
            ['Name', 'Email'],
            User::all(['name', 'email'])->toArray()
        );
    }
}
