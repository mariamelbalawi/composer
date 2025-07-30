@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Notes List</h2>
        <a class="btn btn-success" href="{{ route('notes.create') }}">Add New Note</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th width="240px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($notes as $note)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->description }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('notes.show', $note->id) }}">Show</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('notes.edit', $note->id) }}">Edit</a>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No notes found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
