@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/blog-index')}}" class="btn btn-primary">Show All Blog</a>
            </div>
            <div class="col-12">
                <div class="row justify-content-center m-3 ">
                    <div class="col-5 card p-4">

                        <form action="{{url('/blog-update',$blog->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <img src="{{asset('images/blogs/'.$blog->image)}}" alt="" style="height:50px;">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select" id="" required>
                                    <option value="" hidden>Choose</option>

                                    @foreach ($blogCategorys as $data)
                                        <option value="{{$data->id}}">{{$data->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="3">{{$blog->description}}</textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success ">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection