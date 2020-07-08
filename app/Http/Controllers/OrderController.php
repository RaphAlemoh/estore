<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use App\Notifications\OrderNotification;
use App\User;

class OrderController extends Controller
{
    public function sendNotification()
    {
        $user = User::first();
  
        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];
  
        Notification::send($user, new OrderNotification($details));
        // $user->notify(new MyFirstNotification($details));
        $user->notifications->first()->markAsRead();
        dd($user->notifications->first());
        // dd();
        // dd($user->unreadNotifications);
        // dd($user->readNotifications->read_at);
    }
}
