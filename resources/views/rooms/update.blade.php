@extends('layout.layout')

@section('content')
<div class="container">
    <h1 class="mt-4">Edit Room</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="name" class="form-label">Room Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $room->name) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description">{{ old('description', $room->description) }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="url" class="form-control" id="image" name="image" value="{{ old('image', $room->image) }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update Room</button>
        <a href="{{ route('roomdash') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
