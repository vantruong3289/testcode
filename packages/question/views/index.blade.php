@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Question') }}</div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">State</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                    <tr>
                        <th scope="row">{{ $question->id }}</th>
                        <td>{{ $question->name }}</td>
                        <td>{{ $question->state }}</td>
                        <td>
                            <a href="{{ route('questions.show', $question->id) }}"><i class="far fa-eye"></i></a>
                            <a href="{{ route('questions.edit', $question->id) }}"><i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="card-footer">
            {{ $questions->onEachSide(-1)->links() }}
        </div>
    </div>
</div>
@endsection
