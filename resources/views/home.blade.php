@extends('layouts.app')

@section('content')
    @foreach ($movies as $film)
        <p>{{ $film->title }}</p>
    @endforeach
@endsection
