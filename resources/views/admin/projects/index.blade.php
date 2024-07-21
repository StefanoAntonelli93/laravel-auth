@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="content">
            <div class="header-content d-flex justify-content-between align-items-center">
                <h2 class="py-3">Projects List</h2>
                <div>
                    {{-- vai a create --}}
                    <a href="{{ route('admin.projects.create') }}"><button class="btn btn-primary">Crea nuovo</button></a>
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
                        <td>
                            <div>{{ $project->name }}</div>
                        </td>
                        <td>
                            <div>{{ $project->status }}</div>
                        </td>
                        <td>
                            {{-- vai a show --}}
                            <a href="{{ route('admin.projects.show', $project->id) }}"><button
                                    class="btn btn-primary btn-sm"><i class="fa-solid fa-eye"></i></button></a>
                            <a href=""><button class="btn btn-success btn-sm"><i
                                        class="fa-solid fa-gear"></i></button></a>
                            <a href=""><button class="btn btn-danger btn-sm"><i
                                        class="fa-solid fa-trash-can"></i></button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
