@extends('common.layout')

@section('css')
   <title>{{$pagenews->title}}</title>
   <meta name="keywords" content="{{$pagenews->key}}">
    <meta name="description" content="{{$pagenews->description}}">
    <style>
         .pagewraper {
        margin:3rem auto;
        text-align: center;
      } 
        .pagination {
            display: inline-block;
            padding-left: 0;
            border-radius: 4px;
        }
        .pagination > li {
            display: inline;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            float: left;
            padding: 12px 24px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        .pagination > li:first-child > a,
        .pagination > li:first-child > span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            z-index: 3;
            color: #23527c;
            background-color: #eee;
            border-color: #ddd;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #337ab7;
            border-color: #337ab7;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        .pagination-lg > li > a,
        .pagination-lg > li > span {
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
        }
        .pagination-lg > li:first-child > a,
        .pagination-lg > li:first-child > span {
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
        }
        .pagination-lg > li:last-child > a,
        .pagination-lg > li:last-child > span {
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
        }
        .pagination-sm > li > a,
        .pagination-sm > li > span {
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
        }
        .pagination-sm > li:first-child > a,
        .pagination-sm > li:first-child > span {
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
        }
        .pagination-sm > li:last-child > a,
        .pagination-sm > li:last-child > span {
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
        }
        .pager {
            padding-left: 0;
            margin: 20px 0;
            text-align: center;
            list-style: none;
        }
        .pager li {
            display: inline;
        }
        .pager li > a,
        .pager li > span {
            display: inline-block;
            padding: 5px 14px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 15px;
        }
        .pager li > a:hover,
        .pager li > a:focus {
            text-decoration: none;
            background-color: #eee;
        }
        .pager .next > a,
        .pager .next > span {
            float: right;
        }
        .pager .previous > a,
        .pager .previous > span {
            float: left;
        }
        .pager .disabled > a,
        .pager .disabled > a:hover,
        .pager .disabled > a:focus,
        .pager .disabled > span {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
        }
    </style>
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
                    <li class="selected"><a href="{{url('/categoryId/0.html')}}">新闻资讯</a></li>
                    <li><a href="{{url('/about.html')}}">关于我们</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="slideshow-wrapper">
        <div class="swiper-container" style="width: 100%;height: 100%;">
            <div class="swiper-wrapper">
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

        <div class="row" id="new-catageory">
            @foreach($categories as $key=>$category)
                <div class="four columns mobile-two cursorExtra">
                    @if ($categoryId==0)
                        @if ($key == 0)
                            <p class="home-colums"><a href="{{url('/categoryId').'/'.$category->id.'.html'}}" class="active_category" onclick="showTab($categoryId)" id="id{{$category->id}}">{{$category->name}}</a></p>
                        @else
                            <p class="home-colums"><a href="{{url('/categoryId').'/'.$category->id.'.html'}}"  onclick="showTab($categoryId)" id="id{{$category->id}}">{{$category->name}}</a></p>
                        @endif
                    @else
                        @if ($category->id == $categoryId)
                            <p class="home-colums"><a href="{{url('/categoryId').'/'.$category->id.'.html'}}" class="active_category" onclick="showTab($categoryId)" id="id{{$category->id}}">{{$category->name}}</a></p>
                        @else
                            <p class="home-colums"><a href="{{url('/categoryId').'/'.$category->id.'.html'}}"  onclick="showTab($categoryId)" id="id{{$category->id}}">{{$category->name}}</a></p>
                        @endif
                    @endif
                </div>
            @endforeach
        </div>

        <div id="tab{{$categoryId}}">
            <div class="row" style="margin-top: 20px;">
                @foreach($news as $key=>$one)
                    @if($key%2==0)
                        <div class="twelve columns news-title">
                            <h2>{{$one->title}}</h2>
                            <p>{{$one->author}}   发表日期：{{$one->released_at}} <!-- <span>浏览次数：19</span> --></p>
                        </div>
                        <div class="twelve columns">
                            <div class="seven columns">
                                <img src="/upload/{{$one->thumb}}" alt="" class="serv-mobile" />
                            </div>
                            <div class="five columns">
                                <div class="serv-desc">
                                     <p class="desc-extra">{{mb_substr(strip_tags($one->content),0,180,'utf-8')}}<a href="{{url('/'.$one->category_id.'/'.$one->id.'.html')}}" style="color: #f00;" target="_blank">[详细]</a></p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="twelve columns news-title">
                            <h2>{{$one->title}}</h2>
                            <p>{{$one->author}}   发表日期：{{$one->released_at}} <!-- <span>浏览次数：9</span> --></p>
                        </div>
                        <div class="twelve columns">
                            <div class="five columns">
                                <div class="serv-desc">
                                   <p class="desc-extra">{{mb_substr(strip_tags($one->content),0,180,'utf-8')}}<a href="{{url('/'.$one->category_id.'/'.$one->id.'.html')}}" style="color: #f00;" target="_blank">[详细]</a></p>
                                </div>
                            </div>
                            <div class="seven columns newright">
                                <img src="/upload/{{$one->thumb}}" alt="" class="serv-mobile" />
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
           <!--  {{--<div class="row" style="margin-top: 20px;">
               <div class="twelve columns news-title">
                   <h2>互联网＋东莞睿泰涂布科技引领硅胶保护膜行业新起点</h2>
                   <p>发表日期：2016-08-02 17:19 <span>浏览次数：9</span></p>
               </div>
               <div class="twelve columns">
                   <div class="five columns">
                       <div class="serv-desc">
                           <p class="desc-extra">[根据东莞睿泰涂布讯]硅胶保护模是一款主要应用于保护电子产品的屏幕保护膜，现在主流的
                               硅胶保护膜是PET硅胶屏幕保护膜，适用于平板.电脑.各类屏幕显示器表面保护面膜镜，面玻璃等等表面防刮防尘
                               防辐射等保护面膜，该保护膜选用独特的进口环保静电吸附硅胶层技术，让你的电子产品屏幕全方位的受到硅胶
                               保护....<a href="https://club.1688.com/article/61165328.html" style="color: #f00;" target="_blank">[详细]</a></p>
                       </div>
                   </div>
                   <div class="seven columns newright">
                       <img src="{{url('images/news2.png')}}" alt="" class="serv-mobile" />
                   </div>
               </div>
           </div>--}} -->
        </div>
        <!-- <div class="row" style="margin-top: 20px;">
            <div class="twelve columns">
                <ul class="page-list six columns">
                    <li class="list-item active-page"><a href="">1</a></li>
                    <li class="list-item"><a href="">2</a></li>
                    <li class="list-item"><a href="">3</a></li>
                    <li class="list-item"><a href="">4</a></li>
                    <li class="list-item nextpage"><a href="">下一页</a></li>
                    <li class="list-item lastpage"><a href="">末页</a></li>
                </ul>
            </div>
        </div> -->
        <div class="pagewraper">
        {{ $news->links() }}
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
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
            });
        });

        function showTab(num) {
            for (i = 1; i <= 3; i++) {
                $("#tab" + i).css("display", "none");
                $("#id" + i).removeClass("active_category");
            }
            $("#tab" + num).css("display", "block");
            $("#id" + num).addClass("active_category");
        }
    </script>
@endsection