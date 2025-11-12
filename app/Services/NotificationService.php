<?php

namespace App\Services;

class NotificationService
{
    public function send(string $recipient, string $message): string
    {
        // Simula o envio de uma notificação
        return "Notificação enviada para {$recipient}: {$message}";
    }
}

