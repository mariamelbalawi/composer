@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Note Details</h2>
        <a class="btn btn-secondary" href="{{ route('notes.index') }}">Back</a>
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Title:</strong> {{ $note->title }}
        </div>
        <div class="card-body">
            <p class="card-text">
                <strong>Description:</strong><br>
                {{ $note->description }}
            </p>
        </div>
    </div>
@endsection
