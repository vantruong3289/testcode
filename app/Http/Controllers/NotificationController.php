<?php

namespace App\Http\Controllers;

use App\Notifications\InvoicePaidBroadcast;
use App\Notifications\InvoicePaidDatabase;
use App\Notifications\InvoicePaidEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * notify via database
     *
     * @return void
     */
    public function viaDatabase()
    {
        $user = Auth::user();
        $user->notify(new InvoicePaidDatabase());
        $notifications = $user->notifications;
        return view('notifications.via-database', compact('notifications'));
    }

    /**
     * notify via email
     * @return void
     */
    public function viaEmail()
    {
        $user = Auth::user();
        $email = new InvoicePaidEmail();
        // $user->notify($email);
        return $email->toMail($user);
    }

    /**
     * notify via broadcast
     */
    public function viaBroadcast()
    {
        $user = Auth::user();
        $user->notify(new InvoicePaidBroadcast());
        return 'success';
    }

}
