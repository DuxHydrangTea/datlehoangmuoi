@extends('client.page')
@section('content')

@session('message')
<script>
   alert('{{session('message')}}')
</script>
@endsession


    <main class="main">
      <div class="main-introduce container">
        <h4 class="main-introduce-heading">Welcome</h4>
        <div class="main-introduce-body">
          <div class="main-introduce-body-title flex-1">
            <p>Đặt lễ Ánh Hồng - Đền ông Hoàng Mười</p>
          </div>
          <div class="main-introduce-body-content flex-1">
            <p>
              Phục vụ tất cả các lễ chay, lễ vật và cả viết sớ
              <br />
              Phục vụ 24/24 - có xe đưa đón tận nơi tại cửa hàng Đền - Cam kết
              đáp ứng tất cả nhu cầu khách hàng
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="main-produces">
          <div class="main-produces-item">
            <img src="\onghoangmuoi-assets\img\icon chua-01 copy.png" alt="" srcset="">
            <h1>Phục vụ tận tâm 24/24</h1>
            <p>Cam kết luôn sẵn sàng để phục vụ tận tâm</p>
          </div>
          <div class="main-produces-item">
            <img src="\onghoangmuoi-assets\img\icon chua-02 copy.png" alt="" srcset="">
            <h1>Hướng dẫn chi tiết quy trình lễ bái.</h1>
            <p>Chu đáo trong từng giai đoạn lễ bái</p>
          </div>
          <div class="main-produces-item">
            <img src="\onghoangmuoi-assets\img\icon chua-04 copy.png" alt="" srcset="">
            <h1>Phục vụ bưng lễ, hạ lễ, hóa mã</h1>
            <p>Dịch vụ cho từng phần - lĩnh vực</p>
          </div>
          <div class="main-produces-item">
            <img src="\onghoangmuoi-assets\img\icon chua-03 copy.png" alt="" srcset="">
            <h1>Dịch vụ xe điện chuyển chở lễ vật và khách 24/24</h1>
            <p>Sẵn sàng phương tiện chuyên chở - tiết kiệm thời gian đi lại</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="main-heading">
          <p>Các thể loại dịch vụ</p>
          <h1>Các thể loại dịch vụ và nhiều ưu đãi khách hàng...</h1>
        </div>
        <div class="main-produces">
          <div class="main-produces-item">
            <img src="/onghoangmuoi-assets/img/datle.jpg" alt="" />

            <h1>Các Gói Lễ Vật</h1>
            <p>
              Lễ Mã Tam Tứ Phủ <br />
              Lễ Hầu Đồng...
            </p>
          </div>
          <div class="main-produces-item">
            <img src="/onghoangmuoi-assets/img/item.jpg" alt="" />

            <h1>Tại Bản Tự - Ông Hoàng Mười</h1>
            <p>
              Tổ chức các khóa lễ tại đền.
              <br />
              Thực hiện các khóa lễ tại gia theo yêu cầu.
            </p>
          </div>
          <div class="main-produces-item">
            <img src="/onghoangmuoi-assets/img/item2.jpg" alt="" />

            <h1>Dịch Vụ Chuyên Nghiệp</h1>
            <p>Lễ xôi gà chuẩn bị sẵn, đầy đủ và chu đáo.</p>
          </div>
          <div class="main-produces-item">
            <img src="/onghoangmuoi-assets/img/item3.jpg" alt="" />

            <h1>Ưu Đãi Khách Hàng</h1>
            <p>Nhiều chương trình khuyến mãi hấp dẫn dành cho khách hàng.</p>
          </div>
        </div>
       
      </div>
     @livewire('home.triple-news-component')
      <div class="container" id="to-images">
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