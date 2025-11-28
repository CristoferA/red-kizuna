<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Google\Client;

class GoogleCalendarAuth extends Command
{
    protected $signature = 'google:auth';
    protected $description = 'Autentica la app con Google Calendar y genera token.json';

    public function handle()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/credentials.json'));
        $client->addScope('https://www.googleapis.com/auth/calendar');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        // Ruta donde se guardará el token
        $tokenPath = storage_path('app/google/token.json');

        // Si ya existe, salir
        if (file_exists($tokenPath)) {
            $this->info('Ya existe un token válido en: ' . $tokenPath);
            return;
        }

        // Crear URL de autorización
        $authUrl = $client->createAuthUrl();
        $this->info("Abre este enlace en tu navegador y autoriza el acceso:");
        $this->line($authUrl);

        $this->newLine();
        $authCode = $this->ask('Pega aquí el código de autorización que Google te entrega');

        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
        file_put_contents($tokenPath, json_encode($accessToken));

        $this->info('✅ Token guardado correctamente en: ' . $tokenPath);
    }
}
