@extends('client.page',
[
  'display_banner' => false,
])
@section('content')
<main class="main">
    <div class="container">
      <div class="main-heading">
        <h1>Những bài viết đã ẩn</h1>
        
      </div>
      <div class="main-news">
        @forelse($posts as $p )
        <a class="main-news-item" href="{{route('client.post.show', [
            'slug_category'=> $p->category->slug,
            'slug_blog' =>$p->slug,
        ])}}">
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
      <a href="" class="main-link-read-more"> <p>Xem thêm</p></a>
    </div>
    
  </main>
  @endsection