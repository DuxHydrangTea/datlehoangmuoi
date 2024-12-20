@extends('client.page', [
    'title' => $post->title,
    'meta_description' => $post->expert,
    'meta_keywords' => $post->keywords,
    'display_banner' => false,
])
@section('content')
<main class="main">
    <div class="container">
      <div class="main-blog">
        <div class="thumbnail">
          <img
            src="/storage/{{$post->thumbnail}}"
            width="100%"
            alt=""
          />
          <div class="top">
             <p class="category"> {{$post->category->name ?? ""}}</p>

            {{-- <p class="hot">Hot</p> --}}
          </div>
        </div>
        <h1 class="title">
          
             {{$post->title}}
        </h1>
        <p class="abstract">
          {{ $post->expert}}
        </p>

        <p class="time">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="1.2em"
            height="1.2em"
            viewBox="0 0 24 24"
            {...$$props}
          >
            <path
              fill="currentColor"
              d="M17 3.34a10 10 0 1 1-14.995 8.984L2 12l.005-.324A10 10 0 0 1 17 3.34M12 6a1 1 0 0 0-.993.883L11 7v5l.009.131a1 1 0 0 0 .197.477l.087.1l3 3l.094.082a1 1 0 0 0 1.226 0l.094-.083l.083-.094a1 1 0 0 0 0-1.226l-.083-.094L13 11.585V7l-.007-.117A1 1 0 0 0 12 6"
            />
          </svg>
         {{$post->created_at->diffForHumans()}}
        </p>

        <div class="content">
          {!!$post->content!!}
        </div>
        @php
          $tags = explode(",",$post->tags ?? "");
         
        @endphp
        <div class="tags">
          <h2>Từ khoá:</h2>
          <ul class="tags-container">
            @foreach ($tags as  $tag)
            <li class="tags-container-item">{{$tag}}</li>
            @endforeach
          
          </ul>
        </div>
        <p class="author">Đền Ông Hoàng Mười</p>
        @if(Auth::check() && Auth::user()->isCreator())
          <div class="btn-function-container">
            <a href="{{route('client.post.edit', ['slug_category' => $post->category->slug,
              'slug_blog' => $post->slug])}}" class="edit btn-function"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="currentColor" d="M15 3c1.296 0 2.496.41 3.477 1.11l-9.134 9.133a1 1 0 1 0 1.414 1.414l9.134-9.134A6 6 0 0 1 21 9v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm6.657-.657a1 1 0 0 1 0 1.414L19.89 5.523a6 6 0 0 0-1.414-1.414l1.766-1.766a1 1 0 0 1 1.414 0Z"/></g></svg>Sửa</a>
              <a href="{{route('client.post.set_hidden', $post->id)}}" class="hidden btn-function">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2m4.004 10.878c-.345-.525-.594-.903-1.542-.753c-1.79.284-1.989.597-2.074 1.113l-.024.156l-.025.166c-.097.683-.094.941.22 1.27c1.265 1.328 2.023 2.285 2.253 2.845c.112.273.4 1.1.202 1.918a8.2 8.2 0 0 0 3.151-2.237c.11-.374.19-.84.19-1.404v-.105c0-.922 0-1.343-.652-1.716a7 7 0 0 0-.645-.325c-.367-.167-.61-.276-.938-.756q-.06-.085-.116-.172M12 3.833c-2.317 0-4.41.966-5.896 2.516c.177.123.331.296.437.534c.204.457.204.928.204 1.345c0 .328 0 .64.105.865c.144.308.766.44 1.315.554c.197.042.399.084.583.135c.506.14.898.595 1.211.96c.13.151.323.374.42.43c.05-.036.211-.211.29-.498c.062-.22.044-.414-.045-.52c-.56-.66-.529-1.93-.356-2.399c.272-.739 1.122-.684 1.744-.644c.232.015.45.03.614.009c.622-.078.814-1.025.949-1.21c.292-.4 1.186-1.003 1.74-1.375A8.1 8.1 0 0 0 12 3.833"/></svg>
                {{$post->status == "public" ? "Ẩn bài viết" : "Công khai bài viết"}} </a>
                <form action="{{route('client.post.delete', $post->id)}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="delete btn-function" onclick="return confirm('Sau khi xoá bài viết bạn sẽ không thể khôi phục lại được\nXác nhận xoá?')" class="delete">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="M20 6a1 1 0 0 1 .117 1.993L20 8h-.081L19 19a3 3 0 0 1-2.824 2.995L16 22H8c-1.598 0-2.904-1.249-2.992-2.75l-.005-.167L4.08 8H4a1 1 0 0 1-.117-1.993L4 6zm-6-4a2 2 0 0 1 2 2a1 1 0 0 1-1.993.117L14 4h-4l-.007.117A1 1 0 0 1 8 4a2 2 0 0 1 1.85-1.995L10 2z"/></svg> Xoá vĩnh viễn</button>
                </form>
          </div>
          
      
          
          
          @endif
      </div>
      <hr />
      @livewire('home.triple-news-component',
      [
        'title' => 'Bài viết nổi bật',
      ])
    </div>
    <div class="container">
      <div class="main-heading">
        <p>Hình ảnh</p>
        <h1>Nắm trọn khoảnh khắc đẹp nhất trong lễ Ông Hoàng Mười</h1>
      </div>
      <div class="main-gallery">
        <img src="/onghoangmuoi-assets/img/img1.jpg" alt="" />

        <img src="/onghoangmuoi-assets/img/imd2.jpg" alt="" /><img
          src="/onghoangmuoi-assets/img/img3.jpg"
          alt=""
        />
        <img src="/onghoangmuoi-assets/img/img4.jpg" alt="" /><img
          src="/onghoangmuoi-assets/img/img5.jpg"
          alt=""
        />
        <img src="/onghoangmuoi-assets/img/img6.jpg" alt="" />
      </div>
      <a href="" class="main-link-read-more"> <p>Xem thêm</p></a>
    </div>
  </main>
  @endsection