@extends('common.layout')

@section('css')
    <title>{{$pageabout->title}}</title>
    <meta name="keywords" content="{{$pageabout->key}}">
    <meta name="description" content="{{$pageabout->description}}">
@endsection


@section('content')
    <header>
        <div id="main-wrapper">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{url('images/logo1.png')}}" alt="mainlogo" /></a>
            </div>
            <nav id="mainmenu">
                <ul id="menu">
                    <li><a href="{{url('/')}}">首页</a>
                    </li>
                    <li><a href="{{url('/quantum.html')}}">量子点膜</a></li>
                    <li><a href="{{url('/good.html')}}">产品展示</a></li>
                    <li><a href="{{url('/categoryId/0.html')}}">新闻资讯</a></li>
                    <li class="selected"><a href="{{url('/about.html')}}">关于我们</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <section id="slideshow-wrapper">
        <img src="{{url('images/822086556917002786.jpg')}}" style="width: 100%;height: 100%;display: block;">
    </section>

    <section id="content-wrapper">
        <div class="row">
            <div class="three columns cursorExtra active_home" id="id0" onclick="showTab(0)">
                <p class="home-colums ">走进睿泰</p>
            </div>
            <div class="three columns cursorExtra" id="id1" onclick="showTab(1)">
                <p class="home-colums">战略定位</p>
            </div>
            <div class="three columns cursorExtra" id="id2" onclick="showTab(2)">
                <p class="home-colums">发展历史</p>
            </div>
            <div class="three columns cursorExtra" id="id3" onclick="showTab(3)">
                <p class="home-colums">自主创新</p>
            </div>
        </div>
        <div id="tab0">
            <div class="row">
                <div class="twelve columns">
                  <h2 class="home-title">{{$aboutone->title}}</h2>
                    <p class="home-intro">{{$aboutone->title_intro}}</p>
                </div>
                <div class="twelve columns">
                    <div class="ten" style="margin: 0 auto;">
                        <img src="/upload/{{$aboutone->thumb}}" style="width: 100%;">
                    </div>
                </div>
            </div>
            @if($aboutone->content)
            <div class="twelve columns home-content">
                {!!$aboutone->content!!}
            </div>
            @endif
        </div>
        <div id="tab2" style="display: none;">
            <div class="row">
                <div class="twelve columns">
                    <h2 class="home-title">{{$aboutthree->title}}</h2>
                    <p class="home-intro">{{$aboutthree->title_intro}}</p>
                </div>
                <div class="twelve columns">
                    <div class="ten" style="margin: 0 auto;">
                       <img src="/upload/{{$aboutthree->thumb}}" style="width: 100%;">
                    </div>
                </div>
            </div>
              @if($aboutthree->content)
            <div class="twelve columns home-content">
                {!!$aboutthree->content!!}
            </div>
            @endif
        </div>
        <div id="tab3" style="display: none;">
            <div class="row">
                <div class="twelve columns">
                  <h2 class="home-title">{{$aboutfour->title}}</h2>
                    <p class="home-intro">{{$aboutfour->title_intro}}</p>
                </div>
                <div class="twelve columns">
                    <div class="ten" style="margin: 0 auto;">
                        <img src="/upload/{{$aboutfour->thumb}}" style="width: 100%;">
                    </div>
                </div>
                 @if($aboutfour->content)
                <div class="twelve columns home-content Innovation" style="margin-top: 19px;">
                    {!!$aboutfour->content!!}
                </div>
                    @endif

            </div>
        </div>
        <div id="tab1" style="display: none;">
            <div class="row">
                <div class="twelve columns">
                    <h2 class="home-title">{{$abouttwo->title}}</h2>
                    <p class="home-intro">{{$abouttwo->title_intro}}</p>
                </div>
                <div class="twelve columns">
                    <div class="ten" style="margin: 0 auto;">
                        <img src="/upload/{{$abouttwo->thumb}}" style="width: 100%;">
                    </div>
                </div>
                 @if($abouttwo->content)
                <div class="twelve columns home-content Innovation" style="margin-top: 20px;">
                    {!!$abouttwo->content!!}
                </div>
                    @endif
                
            </div>
        </div>
    </section>

   <footer>
        <div class="row" style="width: 1200px;">
            <div class="three-smaller columns mobile-view" style="margin-bottom: 0px;">
                <h5>产品展示</h5>
                <ul>
                    <li><a href="{{url('/quantum.html')}}">量子点膜</a></li>
                    <li><a href="{{url('/good.html')}}">AB胶</a></li>
                    <li><a href="{{url('/good.html')}}">内防爆膜</a></li>
                    <li><a href="{{url('/good.html')}}">热弯膜</a></li>
                    <li><a href="{{url('/good.html')}}">UV减粘膜</a></li>
                </ul>
            </div>
            <div class="three-smaller columns mobile-view">
                <h5>关于我们</h5>
                <ul>
                    <li><a href="{{url('/about.html')}}">走进睿泰</a></li>
                    <li><a href="{{url('/about.html')}}">战略定位</a></li>
                    <li><a href="{{url('/about.html')}}">发展历史</a></li>
                    <li><a href="{{url('/about.html')}}">自主创新</a></li>
                </ul>
            </div>
            <div class="three-smaller columns mobile-view">
                <h5>新闻资讯</h5>
                <ul>
                    @foreach($categories as $category)
                    <li><a href="{{url('/categoryId/'.$category->id.'.html')}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="four-small columns mobile-view">
                <h5>联系我们</h5>
                <ul>
                    <li class="address-icon">广东省东莞市桥头镇东部工业园东新路12号</li>
                    <li class="phone-icon">电话 : +86 0769 89307828</li>
                    <li class="email-icon">传真 : +86 0769 89307333</li>
                </ul>
            </div>
             <div class="four-smaller  columns mobile-view">
             <h5>微信公众号</h5>
               <img src="{{url('images/weixin.jpg')}}" class="weiimg">
           </div>
        </div>
        <div class="row" style="width: 1200px;">
             <div class="twelve columns mobile-four">
             <p class="copyright">Copyright ©  2016 睿泰科技<a href="http://www.reteck.net" target="_blank" style="text-decoration: none;">量子点膜</a>. All Rights Reserved</p>
             <ul class="friend-list">
                <li class="list-item">友情链接:</li>
                 @foreach($friendurls as $friendurl)
                    <li class="list-item"><a href="{{$friendurl->url}}" target="_blank">{{$friendurl->name}}</a></li>
                 @endforeach
            </ul>
            </div>
          
        </div>
    </footer>
@endsection

@section('js')
    <script>
        function showTab(num) {
            for (i = 0; i <= 3; i++) {
                $("#tab" + i).css("display", "none");
                $("#id" + i).removeClass("active_home");
            }
            $("#tab" + num).css("display", "block");
            $("#id" + num).addClass("active_home");
        }
    </script>
@endsection