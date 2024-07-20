@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="content">
            <div class="header-content d-flex justify-content-between align-items-center">
                <h1 class="py-3">Projects List</h1>
                <div>
                    <button class="btn btn-primary">Crea nuovo</button>
                </div>
            </div>
        </div>
        {{-- table projects --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Settings</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td> <a href="">
                                <div>{{ $project->name }}</div>
                            </a></td>
                        <td>
                            <div>{{ $project->status }}</div>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">modifica</button>
                            <button class="btn btn-secondary btn-sm">cancella</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
