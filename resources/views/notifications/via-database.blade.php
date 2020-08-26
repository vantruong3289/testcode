@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">{{ __('Notification via Database') }}</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Type</th>
                        <th scope="col">Notifiable Type</th>
                        <th scope="col">Notifiable ID</th>
                        <th scope="col">Data</th>
                        <th scope="col">Read At</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Update At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($notifications as $notification)
                        <tr>
                            <th scope="row">{{ $notification->id }}</th>
                            <td>{{ $notification->type }}</td>
                            <td>{{ $notification->notifiable_type }}</td>
                            <td>{{ $notification->notifiable_id }}</td>
                            <td>{{ json_encode($notification->data) }}</td>
                            <td></td>
                            <td>{{ $notification->created_at->format('Y-m-d H:i:s') }}</td>
                            <td>{{ $notification->updated_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
