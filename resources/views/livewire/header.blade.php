<header class="header">
    <div class="header-content">
      <div id="header-nav-mobile">
        <nav>
          <ul>
            <li><a href="{{route('index')}}">Trang chủ</a></li>
            @foreach ($categories as  $category)
          
                  <li><a href="{{route('client.post.by.slug-category', $category->slug)}}">{{$category->name}}</a></li>
            
            @endforeach
            <li><a href="#to-contact">Liên lạc</a></li>
            <li><a href="{{route('introduce')}}">Về chúng tôi</a></li>
          </ul>
        </nav>
      </div>
      <div class="header-content-1">
        <div class="header-content-1-cover">
          <button id="open-nav-mobile">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1.44em"
              height="1.2em"
              viewBox="0 0 1536 1280"
              {...$$props}
            >
              <path
                fill="currentColor"
                d="M1536 1088v128q0 26-19 45t-45 19H64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45m0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 704V576q0-26 19-45t45-19h1408q26 0 45 19t19 45m0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 192V64q0-26 19-45T64 0h1408q26 0 45 19t19 45"
              />
            </svg>
          </button>
          <form action="{{route('search.post')}}" class="header-content-1-form" height="100%">
            
            <button type="submit">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="1.2em"
                height="1.2em"
                viewBox="0 0 24 24"
              >
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="1.5"
                  d="m14 14l2.5 2.5m-.067 2.025a1.48 1.48 0 1 1 2.092-2.092l3.042 3.042a1.48 1.48 0 1 1-2.092 2.092zM16 9A7 7 0 1 0 2 9a7 7 0 0 0 14 0"
                  color="currentColor"
                />
              </svg>
            </button>
            <input type="text" placeholder="Tìm kiếm..." name="search_query"/>
          </form>
        </div>

        <a class="header-content-1-logo" href="{{route('index')}}">
          <img src="/onghoangmuoi-assets/img/logo.jpg" alt="" srcset="" />
        </a>
        <div class="header-content-1-contact">
          <a href="tel:0333333333" class="tel">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1.2em"
              height="1.2em"
              viewBox="0 0 24 24"
            >
              <g
                fill="none"
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="1.5"
                color="currentColor"
              >
                <path
                  d="M16 6.5c-.062-1.712-.275-2.75-1.001-3.475C13.972 2 12.319 2 9.013 2S4.054 2 3.027 3.025S2 5.7 2 9v6c0 3.3 0 4.95 1.027 5.975S5.707 22 9.013 22s4.959 0 5.986-1.025c.726-.725.939-1.763 1.001-3.475M8 19h2m6-7.01V12m4.048 4.491C21.254 15.34 22 13.75 22 11.991c0-1.757-.746-3.348-1.952-4.5M18 9.741c.603.576.976 1.372.976 2.25c0 .879-.373 1.674-.976 2.25"
                />
                <path
                  d="m6 2l.089.534c.193 1.157.29 1.736.686 2.088C7.19 4.989 7.776 5 9 5s1.81-.01 2.225-.378c.397-.352.493-.93.686-2.088L12 2"
                />
              </g>
            </svg>
            0888.485.655</a
          >
          <a href="#" class="not-tel">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1.2em"
              height="1.2em"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4z"
              />
            </svg>
          </a>
         
          <a href="#" class="not-tel">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="1.2em"
              height="1.2em"
              viewBox="0 0 24 24"
            >
              <g fill="none" fill-rule="evenodd">
                <path
                  d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"
                />
                <path
                  fill="currentColor"
                  d="M12 4c.855 0 1.732.022 2.582.058l1.004.048l.961.057l.9.061l.822.064a3.8 3.8 0 0 1 3.494 3.423l.04.425l.075.91c.07.943.122 1.971.122 2.954s-.052 2.011-.122 2.954l-.075.91l-.04.425a3.8 3.8 0 0 1-3.495 3.423l-.82.063l-.9.062l-.962.057l-1.004.048A62 62 0 0 1 12 20a62 62 0 0 1-2.582-.058l-1.004-.048l-.961-.057l-.9-.062l-.822-.063a3.8 3.8 0 0 1-3.494-3.423l-.04-.425l-.075-.91A41 41 0 0 1 2 12c0-.983.052-2.011.122-2.954l.075-.91l.04-.425A3.8 3.8 0 0 1 5.73 4.288l.821-.064l.9-.061l.962-.057l1.004-.048A62 62 0 0 1 12 4m-2 5.575v4.85c0 .462.5.75.9.52l4.2-2.425a.6.6 0 0 0 0-1.04l-4.2-2.424a.6.6 0 0 0-.9.52Z"
                />
              </g>
            </svg>
          </a>
        </div>
      </div>
      <div class="header-content-2">
        <nav class="header-content-2-navbar">
          <ul class="header-content-2-navbar-list">
            <li class="header-content-2-navbar-list-item">
              <a href="{{route('index')}}">Trang chủ</a>
            </li>
           
            @foreach ($categories as $category )
            @if($category->parent_id == 0)
                  
            <li class="header-content-2-navbar-list-item">
                <a href="{{route('client.post.by.slug-category', $category->slug)}}">{{$category->name}}</a>
                @if(count($category->children))
                <ul class="child">
                  @foreach ($category->children as $child )
                    <li><a href="{{route('client.post.by.slug-category', $child->slug)}}">{{$child->name}}</a></li>
                  @endforeach
                 
                </ul>
                @endif
              </li>
          
              @endif
            @endforeach
            <li class="header-content-2-navbar-list-item">
              <a href="#to-contact">Liên lạc</a>
            </li>
            <li class="header-content-2-navbar-list-item">
              <a href="{{route('introduce')}}">Về chúng tôi</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

   