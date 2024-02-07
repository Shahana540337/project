@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center m-3 ">
                    <div class="col-5 card p-4">

                        <form action="{{url('/setting-update',$setting->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="{{$setting->title}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Logo</label>
                                <img src="{{asset('images/settings/'.$setting->logo)}}" alt="" style="height:100px;">
                                <input type="file" name="logo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mobile</label>
                                <input type="number" name="mobile" value="{{$setting->mobile}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" value="{{$setting->email}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <input type="text" name="location" value="{{$setting->location}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Facebook Link</label>
                                <input type="text" name="facebook" value="{{$setting->facebook}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Instagram Link</label>
                                <input type="text" name="instagram" value="{{$setting->instagram}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Twitter Link</label>
                                <input type="text" name="twitter" value="{{$setting->twitter}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Linkedin Link</label>
                                <input type="text" name="linkedin" value="{{$setting->linkedin}}" class="form-control">
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