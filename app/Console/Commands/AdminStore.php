<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminStore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:store';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin account';

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
        $username = $this->ask("What should we call this user");
        $userEmail = $this->ask("Enter user's email address");
        $password = $this->secret("Enter Password");
        $passwordConfirmation = $this->secret("Confirm Password");

        if($passwordConfirmation !== $password){
            $this->error("Password's do not match");
             return Command::SUCCESS;
        }

        $user = new User;

        $user->fullname = $username;
        $user->usertype = 'admin';
        $user->email = $userEmail;
        $user->password = Hash::make($password);

        $this->info("Admin account has been created");
        return Command::SUCCESS;
       
    }
}
