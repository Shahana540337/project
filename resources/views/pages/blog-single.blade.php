@extends('layouts.frontend')

<div class="hero hero-single route bg-image" style="background-image: url(frontend/assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="{{url('/')}}">Home</a>
            </li>
            <li class="breadcrumb-item active">Blog</li>
          </ol>
        </div>
      </div>
    </div>
</div>

@section('content')

    <!-- ======= Blog Single Section ======= -->


    <section class="blog-wrapper sect-pt4" id="blog">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="post-box">
              <div class="post-thumb">
                <img src="{{ asset('images/blogs/'.$data->image) }}" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <h1 class="article-title">{{$data->title}}</h1>
                <ul>
                  <li>
                    <span class="bi bi-person"></span>
                    <a href="#">Jason London</a>
                  </li>
                  <li>
                    <span class="bi bi-tag"></span>
                    <a href="#">{{$data->category}}</a>
                  </li>
                  <li>
                    <span class="bi bi-chat-left-text"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
              <div class="article-content"><p>{{$data->description}}</p></div>
            </div>
        </div>
      </div>
    </section>


    <!-- End Blog Single Section -->

@endsection