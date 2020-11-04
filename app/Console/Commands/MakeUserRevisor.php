<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserRevisor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'presto:makeUserRevisor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi un utente revisore';

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

         $email = $this->ask("inserisci la mail dell'utente che vuole rendere revisore");

         $user= User::where('email',$email)->first();
         

         if(!$user){
             $this->error("utente non trovato");
             return;
         }
             $user->is_revisor=true;
             $user->save();
             $this->info("L'utente {$user->name} è uno stronzo");
         
    }
}