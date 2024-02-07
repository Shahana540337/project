@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Email</th>
                                <th scope="col">Location</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>{{$setting->title}}</td>
                            <td>
                                <img src="{{asset('images/settings/'.$setting->logo)}}" alt="" width="50px" height="auto">
                                
                            </td>
                            <td>{{$setting->mobile}}</td>
                            <td>{{$setting->email}}</td>
                            <td>{{$setting->location}}</td>
                            <td>{{$setting->facebook}}</td>
                            <td>{{$setting->instagram}}</td>
                            <td>{{$setting->twitter}}</td>
                            <td>{{$setting->linkedin}}</td>
                            <td>
                                <a href="{{url('/setting-edit',$setting->id)}}" class="btn btn-success">Edit</a>
                            </td>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection