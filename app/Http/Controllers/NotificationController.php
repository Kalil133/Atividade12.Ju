<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function notify(NotificationService $service)
    {
        $message = $service->send('Juliana', 'Sua compra foi confirmada');
        return response($message);
    }
}
