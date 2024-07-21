@extends('layouts.app')
@section('content')
    <div class="container py-4">
        <div class="content d-flex justify-content-between align-items-center">
            <h2 class="py-3">Crea nuovo progetto </h2>
            {{-- vai a index --}}
            <a href="{{ route('admin.projects.index') }}"><button class="btn btn-primary btn-sm">Torna ai
                    progetti</button></a>
        </div>
        {{-- includo errors.blade.php per mostrare errori --}}
        @include('shared.errors')

        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="project-name" class="form-label">Nome progetto</label>
                <input type="text" class="form-control" id="project-name" name="name">
            </div>
            <div class="mb-3">
                <label for="project-name" class="form-label">Descrizione</label>
                <textarea rows="4" type="text" class="form-control" id="project-name" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crea progetto </button>
        </form>
    </div>
@endsection
