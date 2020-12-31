@extends('_layouts.master')

@section('body')

    <h1>Projects<h1>

    @foreach($projects as $project)
        <h2><a href="{{ $project->getPath() }}">{{ $project->title }}</a></h2>
    @endforeach

@endsection