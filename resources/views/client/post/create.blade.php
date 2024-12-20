@extends('client.page',
[
  'display_banner' => false,
])
@section('content')
<main class="main">
    @session('message')
            <script>
                alert("{{session('message')}}")
            </script>
    @endsession
    <div class="container">
      <div class="main-write">
        
        <form method="POST" action="{{route('client.add.category')}}" class="form-popup hidden-form" id="add-category-form" >
          @csrf
          <button class="btn-x-mark" type="button" id="cancel-add-category">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 16 16"><path fill="currentColor" d="M5.28 4.22a.75.75 0 0 0-1.06 1.06L6.94 8l-2.72 2.72a.75.75 0 1 0 1.06 1.06L8 9.06l2.72 2.72a.75.75 0 1 0 1.06-1.06L9.06 8l2.72-2.72a.75.75 0 0 0-1.06-1.06L8 6.94z"/></svg>
          </button>
          <div class="form-popup-element">
            <p>Tên thể loại</p>
            <input type="text" name="name">
          </div>
          <div class="form-popup-element">
            <p>Mô tả</p>
            <textarea rows="10" type="text" name="description"></textarea>
          </div>
          <div class="form-popup-element">
            <p>Thể loại gốc</p>
            <select name="parent_id" id="">
              <option value="0">Không</option>
              @foreach ($categories as $category )
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
             
            </select>
          </div>
          <button type="submit" onclick="return confirm('Xác nhận thêm thể loại này!')">Xác nhận</button>
        </form>
        <h1 class="heading">Đăng Bài</h1>
        <form  action="{{route('client.post.store')}}" class="main-write-form" enctype="multipart/form-data" method="POST">
            @csrf
          <div class="main-write-form-element">
            <div class="main-write-form-element-item thumbnail-input">
              <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="1.2em"
                    height="1.2em"
                    viewBox="0 0 24 24"
                    {...$$props}
                >
                    <path
                    fill="currentColor"
                    fill-rule="evenodd"
                    d="M12 15.75a.75.75 0 0 0 .75-.75V4.027l1.68 1.961a.75.75 0 1 0 1.14-.976l-3-3.5a.75.75 0 0 0-1.14 0l-3 3.5a.75.75 0 1 0 1.14.976l1.68-1.96V15c0 .414.336.75.75.75"
                    clip-rule="evenodd"
                    />
                    <path
                    fill="currentColor"
                    d="M16 9c-.702 0-1.053 0-1.306.169a1 1 0 0 0-.275.275c-.169.253-.169.604-.169 1.306V15a2.25 2.25 0 1 1-4.5 0v-4.25c0-.702 0-1.053-.169-1.306a1 1 0 0 0-.275-.275C9.053 9 8.702 9 8 9c-2.828 0-4.243 0-5.121.879C2 10.757 2 12.17 2 14.999v1c0 2.83 0 4.243.879 5.122C3.757 22 5.172 22 8 22h8c2.828 0 4.243 0 5.121-.879S22 18.828 22 16v-1c0-2.829 0-4.243-.879-5.121C20.243 9 18.828 9 16 9"
                    />
              </svg>
              <label for="thumbnail">
                <img
                  src="/onghoangmuoi-assets/img/thumbnail.png"
                  alt=""
                  srcset=""
                  id="img-thumbnail"
                  width="100%"
                 
                />
              </label>

              <input
                type="file"
                id="thumbnail"
                hidden
                required
                name="thumbnail"
                onchange="document.getElementById('img-thumbnail').src = window.URL.createObjectURL(this.files[0])"
              />
            </div>
            <div class="main-write-form-element-item">
              <div class="main-write-form-element-item-input">
                <p>Thể loại... <span type="button" class="button-open-add-category" href="" id="button-add-category">Thêm thể loại?</span></p>
                <select name="category_id" id="">
                  @foreach ($categories as  $c)
                  <option value="{{$c->id}}">{{$c->name}}</option> 
                  @endforeach
                 
                </select>
                
              </div>
             
              <div class="main-write-form-element-item-input">
                <p>Nổi bật</p>
                <select name="is_outstanding" id="">
                  <option value="1">Có</option>
                  <option value="0">Không</option>
                </select>
              </div>
              <div class="main-write-form-element-item-input">
                <p>Từ khoá (Mỗi từ khoá cách nhau bởi dấu phẩy)</p>
                <input type="text" name="meta_keywords" placeholder="Tag1, Tag2, Tag3..." />
              </div>
            </div>
          </div>
          <div class="main-write-form-element">
            <div class="main-write-form-element-item">
              <p>Tiêu đề</p>
              <input type="text" required name="title" placeholder="Tiêu đề..." />
            </div>
          </div>
          <div class="main-write-form-element">
            <div class="main-write-form-element-item">
              <p>Tóm tắt</p>
              <textarea
                type="text"
                name="expert"
                placeholder="Tóm lược..."
                rows="10"
                 
              ></textarea>
            </div>
          </div>
          <div class="main-write-form-element">
            <div class="main-write-form-element-item">
              <p>Nội dung</p>
              <textarea
                type="text"
                name="content"
                placeholder="Nội dung..."
                id="editor"
               
              ></textarea>
            </div>
          </div>
          <div class="main-write-form-element">
            <button type="submit">Đăng</button>
          </div>
        </form>
      </div>
      <hr />
      <div class="main-news"></div>
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