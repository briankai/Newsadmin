@extends('common.layout')

@section('css')
    <title>{{$pagenews->title}}</title>
     <meta name="keywords" content="{{$pagenews->key}}">
    <meta name="description" content="{{$pagenews->description}}">
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

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </section>
    <section class="news-inner">
        <div class="row" style="margin-top: 20px;">
            <div class="twelve columns news-title">
                <h2>{{$news->title}}</h2>
                <p>{{$news->author}}   发表日期：{{$news->released_at}} <!-- <span>浏览次数：19</span>--></p> 
            </div>
            <div class="twelve columns">
                <div class="news-article">
                    {!!$news->content!!}
                </div>
            </div>
        </div>
    </section>
     <section>
         <div class="row" style="margin-top: 20px;">
            <div class="twelve columns news-recommend">
                <h3>文章推荐</h3>
                 @foreach($newssorts as $key=>$newssort)
                 @if($key<=4)
                <h5><a href="{{url('/'.$newssort->category_id.'/'.$newssort->id.'.html')}}" target="_blank">{{$newssort->title}}</a></h5>
                <p>{{mb_substr(strip_tags($newssort->content),0,130,'utf-8')}}</p>
                @endif
                @endforeach
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

    <script type="text/javascript">
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
    </script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
@endsection