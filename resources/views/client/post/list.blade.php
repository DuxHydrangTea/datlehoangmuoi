@extends('client.page',
[
'display_banner' => false,
])
@section('content')
<main class="main">
    <div class="container">
      <div class="main-heading">
        <p>Bài Viết</p>
        <h1>{{$cate->name}}</h1>
      </div>
      <div class="main-news">
        @forelse($posts as $p )
        <a class="main-news-item" href="{{$p->category->slug}}/{{$p->slug}}">
            <p class="main-news-item-hot">new!</p>
            <img src="/storage/{{$p->thumbnail}}" alt="" srcset="" />
            <div class="main-news-item-body">
              <h1 class="main-news-item-body-title">{{$p->title}}</h1>
              <p class="main-news-item-body-author">
                <img src="/onghoangmuoi-assets/img/logo.jpg" alt="" />Đền Ông Hoàng Mười
              </p>
              <hr />
              <p class="main-news-item-body-time"><i>{{$p->created_at->diffForHumans()}}</i></p>
              {{-- <p class="main-news-item-body-abstract">
                {{$p->abstract}}
              </p> --}}
              <p class="main-news-item-body-content">
                {{$p->expert}}
              </p>
              <p class="main-news-item-body-button">Read more</p>
            </div>
          </a>
          @empty
          <h2 style="text-align: center">Chưa có bài viết nào !</h2>
        @endforelse
      </div>
     
    </div>
    
  </main>
  @endsection