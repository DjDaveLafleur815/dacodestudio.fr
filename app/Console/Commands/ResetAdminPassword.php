<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResetAdminPassword extends Command
{
    protected $signature = 'admin:reset {email} {password}';
    protected $description = 'Réinitialise le mot de passe admin';

    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();

        if (! $user) {
            $this->error('Utilisateur introuvable.');
            return;
        }

        $user->password = Hash::make($this->argument('password'));
        $user->save();

        $this->info('✅ Mot de passe admin réinitialisé avec succès.');
    }
}
