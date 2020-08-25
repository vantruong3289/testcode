@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Room chat') }}</div>
                <div class="card-body">

                </div>
                <ul class="list-group list-group-flush">
                    @foreach($roomChats as $key => $roomChat)                        
                    <li class="list-group-item">
                        <a href="{{ route('room-chats.show', $roomChat->id) }}">{{ $roomChat->name }}</a>
                    </li>
                    @endforeach
                </ul>              
            </div>  
        </div>
    </div>
</div>
@endsection
