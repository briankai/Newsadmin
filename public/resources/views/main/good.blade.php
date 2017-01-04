@extends('common.layout')

@section('css')
    <title>{{$pagegood->title}}</title>
     <meta name="keywords" content="{{$pagegood->key}}">
    <meta name="description" content="{{$pagegood->description}}">
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
                    <li class="selected"><a href="{{url('/good.html')}}">产品展示</a></li>
                   <li><a href="{{url('/categoryId/0.html')}}">新闻资讯</a></li>
                    <li><a href="{{url('/about.html')}}">关于我们</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="slideshow-wrapper">
        <div class="swiper-container" style="width: 100%;height: 100%;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{url('images/slideshow/banner03.png')}}">
                </div>
                  <div class="swiper-slide">
                    <img src="{{url('images/slideshow/banner01.jpg')}}">
                </div>
                 <div class="swiper-slide">
                    <img src="{{url('images/slideshow/banner02.jpg')}}">
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
            <div class="three columns mobile-two active_home cursorExtra" id="id0" onclick="showTab(0)">
                <p class="home-colums">AB胶</p>
            </div>
            <div class="three columns mobile-two cursorExtra" id="id1" onclick="showTab(1)">
                <p class="home-colums">内防爆膜</p>
            </div>
            <div class="three columns mobile-two cursorExtra" id="id2" onclick="showTab(2)">
                <p class="home-colums">热弯膜</p>
            </div>
            <div class="three columns mobile-two cursorExtra" id="id3" onclick="showTab(3)">
                <p class="home-colums">UV减粘膜</p>
            </div>
        </div>
        <div id="tab0">
            <div class="row" style="margin-top: 20px;">
                <div class="six columns">
                    <img src="{{url('images/C44D.tmp.png')}}" class="goodimg">
                </div>
                <div class="twelve columns">
                    <div class="seven columns">
                        <div class="serv-desc">
                             <p> {!!$goodone->content!!}</p>
                        </div>
                    </div>
                    <div class="five columns">
                        <img src="/upload/{{$goodone->thumb}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productStructure">
                        <h4>产品结构(Product Structure)</h4>
                        <img src="/upload/{{$goodone->product}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productFeatures">
                        <h4>主要物性(Key Properties)</h4>
                         <img src="/upload/{{$goodone->properties}}">
                    </div>
                </div>
            </div>
        </div>
        <div id="tab1" style="display: none;">
            <div class="row" style="margin-top: 20px;">
                <div class="six columns">
                    <img src="{{url('images/EA4E.tmp.png')}}" class="goodimg">
                </div>
                <div class="twelve columns">
                    <div class="seven columns">
                        <div class="serv-desc">
                            <p>{!!$goodtwo->content!!}</p>
                        </div>
                    </div>
                    <div class="five columns">
                        <img src="/upload/{{$goodtwo->thumb}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productStructure">
                        <h4>产品结构(Product Structure)</h4>
                        <img src="/upload/{{$goodtwo->product}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productFeatures">
                        <h4>主要物性(Key Properties)</h4>
                        <img src="/upload/{{$goodtwo->properties}}">
                    </div>
                </div>
            </div>
        </div>
        <div id="tab2" style="display: none;">
            <div class="row" style="margin-top: 20px;">
                <div class="six columns">
                    <img src="{{url('images/3CA3.tmp.png')}}" class="goodimg">
                </div>
                <div class="twelve columns">
                    <div class="seven columns">
                         <p>{!!$goodthree->content!!}</p>
                    </div>
                    <div class="five columns">
                        <img src="/upload/{{$goodthree->thumb}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productStructure">
                        <h4>产品结构(Product Structure)</h4>
                        <img src="/upload/{{$goodthree->product}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productFeatures">
                        <h4>主要物性(Key Properties)</h4>
                        <img src="/upload/{{$goodthree->properties}}">
                    </div>
                </div>
            </div>
        </div>
        <div id="tab3" style="display: none;">
            <div class="row" style="margin-top: 20px;">
                <div class="six columns">
                    <img src="{{url('images/433657533251730075.png')}}" class="goodimg">
                </div>
                <div class="twelve columns">
                    <div class="seven columns">
                        <div class="serv-desc">
                           <p>{!!$goodfour->content!!}</p>
                        </div>
                    </div>
                    <div class="five columns">
                        <img src="/upload/{{$goodfour->thumb}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productStructure">
                        <h4>产品结构(Product Structure)</h4>
                         <img src="/upload/{{$goodfour->product}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns">
                    <div class="productFeatures">
                        <h4>主要物性(Key Properties)</h4>
                        <img src="/upload/{{$goodfour->properties}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="twelve columns" style="margin-top: 100px;width: 100%;text-align: right;">
                    <img src="{{url('images/12.png')}}">
                </div>
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
                direction: 'horizontal',
                autoplay: 5000,
                loop: true,

                // 如果需要分页器
                pagination: '.swiper-pagination',

                // 如果需要前进后退按钮
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',

                // 如果需要滚动条
                scrollbar: '.swiper-scrollbar',
            })
        });

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