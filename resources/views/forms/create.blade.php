@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Create') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('forms.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('forms.entity')                                 
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection