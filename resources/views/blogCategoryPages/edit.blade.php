@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/blogCategory-index')}}" class="btn btn-primary">Show All Blog Category</a>
            </div>
            <div class="col-12">
                <div class="row justify-content-center m-3 ">
                    <div class="col-5 card p-4">

                        <form action="{{url('/blogCategory-update',$blogCategory->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="{{$blogCategory->title}}" class="form-control">
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