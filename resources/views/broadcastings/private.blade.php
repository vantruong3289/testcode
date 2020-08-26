@extends('layouts.app')
@section('content')
<private-channel :recieved-id="{{ $recievedId }}" />
@endsection
