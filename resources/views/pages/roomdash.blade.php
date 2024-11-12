@extends('layout.layout')

@section('content')
<div class="container">
    <h1 class="mt-4">Room Dashboard</h1>

    <!-- Create Room Button -->
    <a href="{{ route('rooms.create') }}" class="btn btn-primary mb-3">Create Room</a>

    <!-- Cancel Button: Goes back to Admin Dashboard -->
    <a href="{{ route('admindash') }}" class="btn btn-secondary">Cancel</a>


    <div class="row">
        @foreach ($rooms as $room)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $room->name }}</h5>
                        <p class="card-text">{{ $room->description }}</p>
                        <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
