@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
<main id="main">


    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container" data-aos="fade-up">
        <div class="row g-5">
          <div class="col-lg-4">
            @include('components.post-entry-1', ['post' => $postFirstLatest])

          </div>

          <div class="col-lg-8">
            <div class="row g-5">

                @foreach ($postTop6Chunk as $item)
                <div class="col-lg-6 border-start custom-border">
                        @foreach ($item as $post)
                            @include('components.post-entry-1',
                            [
                                'post' => $post,
                                'hiddenAuthor' => false,
                                'hiddenExcerpt' => false,
                            ])
                        @endforeach
                </div>  
                @endforeach
                {{-- @for ($i = 0; $i < 2; $i++)
                    <div class="col-lg-6 border-start custom-border">
                        @foreach ($postTop6 as $key => $post)
                            @include('components.post-entry-1', ['post' => $post])
                        @endforeach
                    </div>  
                @endfor --}}
                     
            </div>
          </div>

        </div> <!-- End .row -->
      </div>
    </section> <!-- End Post Grid Section -->


  </main>
@endsection