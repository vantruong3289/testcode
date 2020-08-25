@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Edit') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ route('forms.update', $form->id) }}" enctype="multipart/form-data">
                    @csrf @method('put')
                    @include('forms.entity')                                       
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Edit') }}
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
