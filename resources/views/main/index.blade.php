@extends('common.layout')

@section('css')
    <title>{{$pagehome->title}}</title>
    <meta name="keywords" content="{{$pagehome->key}}">
    <meta name="description" content="{{$pagehome->description}}">
@endsection

@section('content')
    <header>
        <div id="main-wrapper">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{url('images/logo1.png')}}" alt="mainlogo" /></a>
            </div>
            <nav id="mainmenu">
                <ul id="menu">
                    <li class="selected"><a href="{{url('/')}}">首页</a>
                    </li>
                    <li><a href="{{url('/quantum.html')}}">量子点膜</a></li>
                    <li><a href="{{url('/good.html')}}">产品展示</a></li>
                    <li><a href="{{url('/categoryId/0.html')}}">新闻资讯</a></li>
                    <li><a href="{{url('/about.html')}}" style="margin-right: 0px;">关于我们</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="slideshow-wrapper">
        <div class="swiper-container" style="width: 100%;height: 100%;">
            <div class="swiper-wrapper">
              {{-- <!--  @foreach($rotations as  $key=>$rotation)
               <div class="swiper-slide">
                   <img src="/upload/{{$rotation->thumb}}">
               </div>

               @endforeach -->--}}

                <div class="swiper-slide">
                    <img src="{{url('images/slideshow/banner02.jpg')}}">
                </div>
                  <div class="swiper-slide">
                    <img src="{{url('images/slideshow/banner01.jpg')}}">
                </div>
                 <div class="swiper-slide">
                    <img src="{{url('images/slideshow/banner03.png')}}">
                </div>

            </div>
            <!-- 如果需要分页器 -->
            <div class="swiper-pagination"></div>
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- 如果需要滚动条 -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <section id="content-wrapper">
        <div class="row">
            <div class="twelve columns">
                <a href="{{url('/quantum.html')}}" style="display: inline-block;width: 100%;" >
                    <div class="quantum-top">
                    </div>
                </a>
            </div>
        </div>
        <div class="row phone-top">
            <div class="twelve columns">
                <div class="phone-middle">

                </div>
            </div>
        </div>
    </section>
    <section class="quantum-middle">
        <div class="row">
            <div class="five columns mobile-two">
                <img src="/upload/{{$homecontent->thumb}}" style="margin-top: 50px;">
            </div>
            <div class="seven columns quantum-intro mobile-two">
                <h2>{{$homecontent->title}}</h2>
                <p>{!!$homecontent->content!!}</p>
            </div>
        </div>
    </section>
    <section class="quantum-bottom">
        <div class="row">
            <div class="twelve columns">
                <h1 class="goodShow">产品展示<span>Goods display</span></h1>
                <ul class="good-list">
                    <li class="list-item">
                        <a href="{{url('/quantum.html')}}" style="text-decoration: none;display: block;">
                            <img src="/upload/{{$goodcontents->thumb}}">
                            <p>{{$goodcontents->title}}</p>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="{{url('/good.html')}}" style="text-decoration: none;display: block;">
                            <img src="/upload/{{$goodone->thumb}}">
                            <p>{{$goodone->title}}</p>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="{{url('/good.html')}}" style="text-decoration: none;display: block;">
                            <img src="/upload/{{$goodtwo->thumb}}">
                            <p>{{$goodtwo->title}}</p>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="{{url('/good.html')}}" style="text-decoration: none;display: block;">
                            <img src="/upload/{{$goodthree->thumb}}">
                            <p>{{$goodthree->title}}</p>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="{{url('/good.html')}}" style="text-decoration: none;display: block;">
                            <img src="/upload/{{$goodfour->thumb}}">
                            <p>{{$goodfour->title}}</p>
                        </a>
                    </li>
                </ul>
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
        $(document).ready(function() {
            var mySwiper = new Swiper('.swiper-container', {
                direction:'horizontal',
                autoplay: 5000,
                loop: true,


                pagination: '.swiper-pagination',

                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',


                scrollbar: '.swiper-scrollbar'
            })
        });
    </script>
@endsection

