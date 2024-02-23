@extends('layouts.master')
@section('title')
    @php
       echo $post['p_title'];
    @endphp
@endsection
@section('content')
<section class="single-post-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 post-content" data-aos="fade-up">

          <!-- ======= Single Post Content ======= -->
          <div class="single-post">
            <div class="post-meta">
                <span class="date">{{$post['c_name']}}</span>
                <span class="mx-1">&bullet;</span> 
                <span>Jul 5th '22</span></div>
            <h1 class="mb-5">{{$post['p_title']}}</h1>
            <p>{{$post['p_excerpt']}}</p>

            <figure class="my-4" >
              <img src="{{$post['p_image']}}" alt="" style="padding: 0 10% 0 10%"  class="img-fluid">
              {{-- <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption> --}}
            </figure>
          
            <div>
                {!!$post['p_content']!!}
            </div>
       
          </div><!-- End Single Post Content -->

        </div>
        @include('components.slidebar')
      </div>
    </div>
  </section>
@endsection