@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>Edit To-Do</h1>
                <form action="{{ route('todos.update', $todo->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $todo->title }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $todo->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
