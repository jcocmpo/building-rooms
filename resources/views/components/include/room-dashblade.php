@extends('layout.layout')  <!-- Your main layout file -->

@section('content')
<style>
.card-container {
    height: auto;
    padding-left: 10px;
    padding-right: 10px;
    max-width: calc(100% - 250px);
    margin-left: 250px;
    overflow: hidden;
}

.card {
    border: none;
    border-radius: 10px;
    margin-bottom: 20px;
    position: relative;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s;
    width: 100%;
}

.card:hover {
    transform: scale(1.03);
}

.card-img-wrapper {
    overflow: hidden;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    position: relative;
    width: 100%;
    height: 200px;
}

.card-img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    max-width: 100%;
    max-height: 100%;
    transition: transform 0.3s;
}

.card-img-wrapper:hover .card-img {
    transform: scale(1.05);
}

.card-body {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10px;
    color: #ffffff;
    background-color: rgba(0, 0, 0, 0.6);
}

.card-department {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
}

.card-title {
    font-size: 2rem;
    font-weight: 800;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
    margin: 0;
}

.card-text {
    font-size: 1.2rem;
    line-height: 1.4;
    font-style: italic;
    margin-top: 5px;
}

.button-container {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    padding: 10px;
    margin-top: 10px;
    background-color: #37584F;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

.btn-action {
    padding: 6px 10px;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    border: 1px solid transparent;
}

.btn-edit {
    background-color: #ffc107;
    color: #ffffff;
}

.btn-delete {
    background-color: #dc3545;
    color: #ffffff;
}

.btn-action:hover {
    opacity: 0.9;
}
</style>

<!-- Room Cards -->
<div class="container card-container" style="margin-top: 120px;">
    <div class="row justify-content-start">
        @foreach($rooms as $room)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-img-wrapper">
                        <img src="{{ $room->image }}" class="card-img" alt="{{ $room->name }}">
                        <div class="card-body">
                            <p class="card-department">{{ $room->building->name }} Building</p> <!-- Show building association -->
                            <h5 class="card-title">{{ $room->name }}</h5>
                            <p class="card-text">{{ $room->description }}</p>
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="{{ route('rooms.update', $room->id) }}" class="btn-action btn-edit">Edit
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-action btn-delete" onclick="event.stopPropagation();">Delete
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
