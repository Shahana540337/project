@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/service-index')}}" class="btn btn-primary">Show All Service</a>
            </div>
            <div class="col-12">
                <div class="row justify-content-center m-3 ">
                    <div class="col-5 card p-4">
                        <form action="{{url('/service-store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary ">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection