<div class="container">
    <div class="main-heading">
      <p>Bài Viết</p>
      <h1>
       {{$title=="" ? "Các thể loại bài viết cùng những hướng dẫn thực hiện các bước cúng,
        bái, vái, lạy..." : $title}} 
      </h1>
    </div>
    <div class="main-news">
        @foreach ($posts as $p )
        <a class="main-news-item" href="{{route('client.post.show', [
        'slug_category'=> $p->category->slug,
        'slug_blog' => $p->slug,
        ])}}">
            <p class="main-news-item-hot">Nổi bật!</p>
            <img src="/storage/{{$p->thumbnail}}" alt="" srcset="" />
            <div class="main-news-item-body">
              <h1 class="main-news-item-body-title">{{$p->title}}</h1>
              <p class="main-news-item-body-author">
                <img src="/onghoangmuoi-assets/img/logo.jpg" alt="" />{{$p->category->name}}
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
        @endforeach
      
     
    </div>
    <a href="{{route('search.post')}}" class="main-link-read-more"> <p>Xem thêm</p></a>
  </div>