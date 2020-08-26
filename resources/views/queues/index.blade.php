@extends('layouts.app')
@section('content')
<div class="container-fuild">
    <div class="row row-flush">
        <div class="card">
            <div class="card-header">{{ __('Question') }}</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Queue</th>
                        <th scope="col">Payload</th>
                        <th scope="col">Attempt</th>
                        <th scope="col">Reserved At</th>
                        <th scope="col">Available At</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <th scope="row">{{ $job->id }}</th>
                            <td>{{ $job->queue }}</td>
                            <td>{{ $job->payload }}</td>
                            <td>{{ $job->attempts }}</td>
                            <td>{{ $job->reserved_at ?? '' }}</td>
                            <td>{{ $job->available_at->format('Y-m-d H:i:s') }}</td>
                            <td>{{ $job->created_at->format('Y-m-d H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
