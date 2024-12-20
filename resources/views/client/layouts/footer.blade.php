{{-- <div class="share-social-fixed">
  <h2>Chia sẻ với</h2>
  <div class="share-social-fixed-container">
      <a href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}" 
      target="_blank"
      class="share-social-fixed-container-item facebook"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24"><path fill="currentColor" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"/></svg></a>
     
  </div>

</div> --}}

<footer class="footer">
    <div class="footer-form" id="to-infor">
      <div class="container">
      <div class="footer-form-heading">
        <p>Vui lòng</p>
        <h1>Để lại thông tin liên lạc</h1>
        <p>
          Để lại thông tin liên lạc và chúng tôi sẽ liên hệ lại với bạn ngay
          sau khi nhận được thông tin !
        </p>
      </div>

      <div class="footer-flex">
        <div class="">
         
          <div class="footer-under-info" id="to-contact">
            <div class="footer-under-info-address">
              <div class="footer-under-info-address-detail">
                <h1>Đặt Lễ Ánh Hồng</h1>
                <p>
                  Đền Ông Hoàng Mười
                </p>
              </div>
              
            </div>
            <a href="" class="footer-under-info-fanpage">ZALO</a>
            <div class="footer-under-info-contact">
              
              <div class="footer-under-info-contact-detail">
                <h1>SĐT: 0888.485.655</h1>
                <p>ZALO: 0888.485.655</p>
              </div>
            </div>
          </div>
          
        </div>
        <form class="footer-form-container" method="POST" action="{{route('form.send')}}">
          @csrf
          <div class="footer-form-container-input">
           <div class="footer-form-container-input-inner">
            
           </div>
           <input type="text" placeholder="Họ tên..." name="fullname"/>
           <input type="text" placeholder="Thư điện tử - Email..." name="email"/>
           <input type="text" placeholder="Số điện thoại..." name="phone"/>
            <textarea rows="5" type="text" class="footer-form-container-textarea" placeholder="Tin nhắn..." name="message"></textarea>
          </div>
          <div class="footer-form-container-agree">
            <input type="checkbox" required placeholder="Họ tên..." id="agree" name="agree" />
            <label for="agree"
              >Tôi chấp nhận thông tin liên lạc của tôi được thu thập và lưu trữ
              .
            </label>
          </div>
          <button type="submit">Hoàn thành</button>
        </form>
      </div>
     
      
    </div>
    <h1 class="all-rights-reserved">
      <span class="author">DATLEDENHOANGMUOI.COM</span>  © 2024. All Rights Reserved.
    </h1>
    </div>
   
  </footer>
  <script src="/onghoangmuoi-assets/js/open-nav-mobile.js"></script>
  <script src="/onghoangmuoi-assets/js/scroll-to-top.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor.create(document.querySelector("#editor"), {
      ckfinder: {
        uploadUrl:
          "{{route('ckeditor.upload.image', ['_token'=>csrf_token()])}}",
      },
    }).catch((error) => {
      console.error(error);
    });
  </script>
  <script src="/shared-assets/js/add-category.js"></script>
</body>
</html>
