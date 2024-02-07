@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/blogCategory-create')}}" class="btn btn-primary">Create A Blog Category</a>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogCategorys as $blogCategory)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{ $blogCategory->title }}</td>
                            <td>
                                <a href="{{url('/blogCategory-edit',$blogCategory->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/blogCategory-delete',$blogCategory->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection