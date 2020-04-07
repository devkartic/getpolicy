@extends('layouts.app')
@section('content')
    <div class="card">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="card-header">Posts<a href="{{ route('posts.create') }}" class="btn btn-sm btn-outline-primary float-right">Create</a></div>
        <div class="card-body">
            <h5 class="card-title">All posts</h5>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Create By</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->descriptions }}</td>
                    <td>
                        @if($post->status)
                            <button class="btn btn-sm btn-outline-success font-weight-bold">Active</button>
                            @else
                            <button class="btn btn-sm btn-outline-danger font-weight-bold">Inactive</button>
                        @endif
                    </td>
                    <td>{{ $post->user->name }}</td>
                    <td class="text-center">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-primary font-weight-bold">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-warning font-weight-bold">Edit</a>
                        <a href="" class="btn btn-sm btn-outline-danger font-weight-bold">Delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
