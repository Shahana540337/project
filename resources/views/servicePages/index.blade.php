@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/service-create')}}" class="btn btn-primary">Create A Service</a>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td>{{ Str::limit($service->name,10) }}</td>
                                <td>
                                    <img src="{{asset('images/services/'.$service->image)}}" alt="" width="50px" height="auto">
                                </td>
                                <td>{{ Str::limit($service->description,100) }}</td>
                                <td>
                                    <a href="{{url('/service-edit',$service->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{url('/service-delete',$service->id)}}" class="btn btn-danger">Delete</a>
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