@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        <td>{{$about->name}}</td>
                        <td>
                            <img src="{{asset('images/abouts/'.$about->image)}}" alt="" width="50px" height="auto">
                            
                        </td>
                        <td>{{$about->profile}}</td>
                        <td>{{$about->email}}</td>
                        <td>{{$about->phone}}</td>
                        <td>{{ Str::limit($about->description,70) }}</td>
                        <td>
                            <a href="{{url('/about-edit',$about->id)}}" class="btn btn-success">Edit</a>
                        </td>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection