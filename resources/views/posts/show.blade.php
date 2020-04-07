@extends('home')

@section('content')
    <div class="card">
        <div class="card-header">Posts View</div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->descriptions }}</p>
            <button class="btn btn-outline-secondary">{{ $post->user->name }}</button>
        </div>
    </div>
@endsection
