@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{url('/portfolio-create')}}" class="btn btn-primary">Create A Portfolio</a>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $portfolio)

                            <tr>
                            <td>{{$portfolio->id}}</td>
                            <td>{{$portfolio->title}}</td>
                            <td>
                            <img src="{{asset('images/portfolios/'.$portfolio->image)}}" alt="" width="50px" height="auto">
                            </td>
                            <td>{{$portfolio->category}}</td>
                            <td>
                                <a href="{{url('/portfolio-edit',$portfolio->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/portfolio-delete',$portfolio->id)}}" class="btn btn-danger">Delete</a>
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