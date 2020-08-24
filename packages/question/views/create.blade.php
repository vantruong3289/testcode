@extends('layouts.admin')
@section('content')
    <div class="card rounded-0">
        <div class="card-header">{{ __('Create') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('questions.store') }}" enctype="multipart/form-data">
                @csrf
                @include('question::form')                                       
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button> 
                </div>
            </form>
        </div>
    </div>
@endsection
