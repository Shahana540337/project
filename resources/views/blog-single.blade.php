@extends('layouts.frontend')

<div class="hero hero-single route bg-image" style="background-image: url(frontend/assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
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
                <img src="{{ asset('frontend/assets/img/post-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="post-meta">
                <h1 class="article-title">Lorem ipsum dolor sit amet consec tetur adipisicing</h1>
                <ul>
                  <li>
                    <span class="bi bi-person"></span>
                    <a href="#">Jason London</a>
                  </li>
                  <li>
                    <span class="bi bi-tag"></span>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <span class="bi bi-chat-left-text"></span>
                    <a href="#">14</a>
                  </li>
                </ul>
              </div>
              <div class="article-content">
                <p>
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                  porta. Quisque velit
                  nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque
                  nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                  cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                  Nulla quis lorem ut libero malesuada feugiat.
                </p>
                <p>
                  Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                </p>
                <p>
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit. Praesent
                  sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at
                  sem. Donec rutrum congue leo eget malesuada.
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat.
                  Curabitur arcu erat,
                  accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor
                  volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium
                  ut lacinia in, elementum id enim.
                </p>
                <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <p>
                  Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                  consectetur adipiscing elit. Donec sollicitudin molestie malesuada.
                </p>
              </div>
            </div>
        </div>
      </div>
    </section><!-- End Blog Single Section -->

@endsection