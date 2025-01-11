<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeUserReviewer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gla:makeUserReviewer {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi un utente recensore';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user= User::where('email', $this->argument('email'))->first();
        if(!$user){
            $this->error('Utente non trovato');
            return;
        }
        $user->is_reviewer=true;
        $user->save();
        $this->info("L'utente {$user->name} è diventato recensore");
    }
}
