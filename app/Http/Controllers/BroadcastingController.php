<?php

namespace App\Http\Controllers;

use App\Events\NewMessagePrivate;
use App\Events\NewMessagePublic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BroadcastingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publicChannel()
    {
        return view('broadcastings.public');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function privateChannel($recievedId)
    {
        return view('broadcastings.private', compact('recievedId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function presenceChannel(Request $request)
    {
        return view('broadcastings.presence');
    }


    /**
     * New Message Public
     *
     * @param Request $request
     * @return void
     */
    protected function newMessagePublic(Request $request)
    {
        $message = $request->all();
        $message['user_id'] = Auth::id() ?? null;
        broadcast(new NewMessagePublic($message))->toOthers();
        return response($message);
    }

    /**
     * New Message Public
     *
     * @param Request $request
     * @return void
     */
    protected function newMessagePrivate(Request $request)
    {
        $message = $request->all();
        $message['user_id'] = Auth::id() ?? null;
        broadcast(new NewMessagePrivate($message, $recievedId));
        return response($message);
    }
}
