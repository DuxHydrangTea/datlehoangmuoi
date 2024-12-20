@extends('client.page',
[
  'display_banner' => false,
]
)
@section('content')
<main class="main">
    <div class="container">
      <div class="main-heading">
        <h1>Danh sách Thông tin khách hàng gửi</h1>
        
      </div>
      <div class="main-news">
        @forelse($forms as $f )
        <div class="main-news-item {{$f->read_at ? "read" : "not-read"}}" href="" >
           
          
            <div class="main-news-item-body">
              <h1 class="main-news-item-body-title">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" stroke-dasharray="28" stroke-dashoffset="28" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path d="M4 21v-1c0 -3.31 2.69 -6 6 -6h4c3.31 0 6 2.69 6 6v1">
                      <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="28;0" />
                    </path>
                    <path d="M12 11c-2.21 0 -4 -1.79 -4 -4c0 -2.21 1.79 -4 4 -4c2.21 0 4 1.79 4 4c0 2.21 -1.79 4 -4 4Z">
                      <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.4s" values="28;0" />
                    </path>
                  </g>
                </svg> {{$f->fullname}}</h1>
              <p class="main-news-item-body-author">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                  <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                    <path fill="currentColor" fill-opacity="0" stroke-dasharray="64" stroke-dashoffset="64" d="M8 3c0.5 0 2.5 4.5 2.5 5c0 1 -1.5 2 -2 3c-0.5 1 0.5 2 1.5 3c0.39 0.39 2 2 3 1.5c1 -0.5 2 -2 3 -2c0.5 0 5 2 5 2.5c0 2 -1.5 3.5 -3 4c-1.5 0.5 -2.5 0.5 -4.5 0c-2 -0.5 -3.5 -1 -6 -3.5c-2.5 -2.5 -3 -4 -3.5 -6c-0.5 -2 -0.5 -3 0 -4.5c0.5 -1.5 2 -3 4 -3Z">
                      <animate fill="freeze" attributeName="fill-opacity" begin="0.7s" dur="0.5s" values="0;1" />
                      <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="64;0" />
                    </path>
                    <path stroke-dasharray="4" stroke-dashoffset="4" d="M15.76 8.28c-0.5 -0.51 -1.1 -0.93 -1.76 -1.24M15.76 8.28c0.49 0.49 0.9 1.08 1.2 1.72">
                      <animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.3s" values="4;0" />
                    </path>
                    <path stroke-dasharray="6" stroke-dashoffset="6" d="M18.67 5.35c-1 -1 -2.26 -1.73 -3.67 -2.1M18.67 5.35c0.99 1 1.72 2.25 2.08 3.65">
                      <animate fill="freeze" attributeName="stroke-dashoffset" begin="1.4s" dur="0.3s" values="6;0" />
                    </path>
                  </g>
                </svg>  {{$f->phone}} - {{$f->email}}
              </p>
              <hr />
              <p class="main-news-item-body-time"><i>
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12 23C5.925 23 1 18.075 1 12S5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11m1-17.5h-2v6.914l4 4L16.414 15L13 11.586z" />
                </svg> {{$f->created_at->diffForHumans()}}</i></p>
              {{-- <p class="main-news-item-body-abstract">
                {{$f->abstract}}
              </p> --}}
              <p class="main-news-item-body-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                  <path fill="currentColor" fill-opacity="0" stroke="currentColor" stroke-dasharray="72" stroke-dashoffset="72" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19.5v-15.5c0 -0.55 0.45 -1 1 -1h16c0.55 0 1 0.45 1 1v12c0 0.55 -0.45 1 -1 1h-14.5Z">
                    <animate fill="freeze" attributeName="fill-opacity" begin="0.7s" dur="0.5s" values="0;1" />
                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="72;0" />
                  </path>
                </svg> {{$f->message}}
              </p>
              @if(!$f->read_at) 
                <a href="{{route('form.mark_read', $f->id)}}" class="main-news-item-body-button">Đánh dấu đã đọc</a>
              @endif
            </div>
          </div>
          @empty
          <h2 style="text-align: center">Chưa có bài viết nào !</h2>
        @endforelse
      </div>
      {{-- <a href="" class="main-link-read-more"> <p>Xem thêm</p></a> --}}
    </div>
    
  </main>
  @endsection