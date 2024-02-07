@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/blog-create')}}" class="btn btn-primary">Create A Blog</a>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{ Str::limit($blog->title,10) }}</td>
                            <td>
                                <img src="{{asset('images/blogs/'.$blog->image)}}" alt="" width="50px" height="auto">
                            </td>
                            <td>{{$blog->blogCategory->title}}</td>
                            <td>{{ Str::limit($blog->description,30) }}</td>
                            <td>
                                <a href="{{url('/blog-edit',$blog->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/blog-delete',$blog->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        <!-- </div>blogCategory->title -->
    </div>
</section>

@endsection

<!-- blogCategory->title -->