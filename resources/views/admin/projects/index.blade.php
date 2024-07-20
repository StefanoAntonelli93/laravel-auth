@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <h1 class="py-3">Projects List</h1>
        <div class="content">
            @foreach ($projects as $project)
                <ul class="list-unstyled">
                    <li class="py-2">
                        <a href="">
                            <h4>{{ $project->name }}</h4>
                        </a>
                        <div>{{ $project->status }}</div>
                    </li>
                </ul>
                <hr>
            @endforeach
        </div>
    </div>
@endsection
