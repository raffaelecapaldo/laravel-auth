@extends('layouts.admin')
@section('title', 'Lista progetti')

<ul>
    @foreach ($projects as $project)
    <li>{{$project->name}}</li>

    @endforeach
</ul>
