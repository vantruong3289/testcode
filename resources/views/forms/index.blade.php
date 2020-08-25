@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                    @foreach($forms as $form)
                        <tr>
                            <th scope="row">{{ $form->id }}</th>
                            <td>{{ $form->name }}</td>
                            <td>{{ $form->state }}</td>
                            <td>
                                <a href="{{ route('forms.show', $form->id) }}"><i class="far fa-eye"></i></a>
                                <a href="{{ route('forms.edit', $form->id) }}"><i class="far fa-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                {{ $forms->onEachSide(-1)->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
