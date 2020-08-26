@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Edit') }}</div>
            <div class="card-body">
                @include('forms.entity') 
            </div>
        </div>
    </div>
</div>
@endsection
