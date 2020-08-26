<?php

namespace App\Http\Controllers;

use App\Job;
use App\Jobs\ProcessPodcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueueController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        ProcessPodcast::dispatch()->delay(now()->addMinutes(1));
        $jobs = Job::get();
        return view('queues.index', compact('jobs'));
    }
}
