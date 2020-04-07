@extends('home')

@section('content')
    <div class="card">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <h5 class="card-title">Create post</h5>
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" value="{{ $post->title }}" placeholder="Enter title">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descriptions">Description</label>
                    <input type="text" name="descriptions" class="form-control @error('descriptions') is-invalid @enderror" id="descriptions" value="{{ $post->descriptions }}" placeholder="Description here">
                    @error('descriptions')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-check">
                    <input type="checkbox" name="status" @if($post->status) checked @endif class="form-check-input" id="status">
                    <label class="form-check-label" for="exampleCheck1">Is Active</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
