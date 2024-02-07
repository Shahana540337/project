@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            
                        <td>{{$banner->title}}</td>
                        <td>
                            <a href="{{url('/banner-edit',$banner->id)}}" class="btn btn-success">Edit</a>
                        </td>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection