<?php

namespace App\Http\Controllers;

use App\Notifications\InvoicePaidDatabase;
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


}
