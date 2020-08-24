@extends('layouts.admin')
@section('content')
    <div class="card rounded-0">
        <div class="card-header">{{ __('Edit') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('questions.update', $question->id) }}" enctype="multipart/form-data">
                @csrf @method('put')
                @include('question::form')                                       
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Edit') }}
                    </button> 
                </div>
            </form>
        </div>
    </div>
@endsection
