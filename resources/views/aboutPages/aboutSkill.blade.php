@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
                <a href="{{url('/aboutSkill-create')}}" class="btn btn-primary">Create a Skill</a>
            </div>
            <div class="col-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Skill_Title</th>
                            <th scope="col">Skill_Percentage</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skillabout as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->skill_title}}</td>
                            <td>{{$data->skill_percentage}}</td>
                            <td>
                                <a href="{{url('/aboutSkill-edit',$data->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('/aboutSkill-delete',$data->id)}}" class="btn btn-danger">Delate</a>
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