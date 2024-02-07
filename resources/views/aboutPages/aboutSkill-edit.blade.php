@extends('layouts.backend')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center m-3 ">
                    <div class="col-5 card p-4">

                        <form action="{{url('/aboutSkill-update',$skillabout->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label class="form-label">Skill Title</label>
                                <input type="text" name="skill_title" value="{{$skillabout->skill_title}}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Skill Percentage</label>
                                <input type="text" name="skill_percentage" value="{{$skillabout->skill_percentage}}" class="form-control">
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