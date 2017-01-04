<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\News;
use App\Rotation;
use App\pageHead;
use App\goodContent;
use App\aboutContent;
use App\homeContent;
use App\friendurl;

class NewsController extends Controller
{
    public function home(){
        $categories = Category::all();
        $rotations = Rotation::all();
        $pagehome=pageHead::where('name','首页头部')->first();
        $goodcontents = goodContent::where('title','量子点膜')->first();
        $goodone = goodContent::where('title','AB胶')->first();
        $goodtwo = goodContent::where('title','内防爆膜')->first();
        $goodthree = goodContent::where('title','热弯膜')->first();
        $goodfour = goodContent::where('title','UV减粘胶')->first();
        $homecontent = homeContent::where('title','东莞市睿泰涂布科技有限公司')->first();
        $friendurls = friendurl::all();
        return view('main.index',compact('categories','rotations','pagehome','goodcontents','goodone','goodtwo','goodthree','goodfour','homecontent','friendurls'));
    }

    public function quantum(){

        $categories = Category::all();
        $rotations = Rotation::all();
        $pagequantum=pageHead::where('name','量子页面头部')->first();
        $goodcontents = goodContent::where('title','量子点膜')->first();
        $friendurls = friendurl::all();
        return view('main.quantum',compact('categories','rotations','pagequantum','goodcontents','friendurls'));
    }

    public function good(){
        $categories = Category::all();
        $rotations = Rotation::all();
        $pagegood=pageHead::where('name','产品页面头部')->first();
         $goodone = goodContent::where('title','AB胶')->first();
        $goodtwo = goodContent::where('title','内防爆膜')->first();
        $goodthree = goodContent::where('title','热弯膜')->first();
        $goodfour = goodContent::where('title','UV减粘胶')->first();
        $friendurls = friendurl::all();
        return view('main.good',compact('categories','rotations','pagegood','goodone','goodtwo','goodthree','goodfour','friendurls'));
    }

    public function news($categoryId)
    {
        $rotations = Rotation::all();
        $categories = Category::all();
        $pagenews=pageHead::where('name','新闻页面头部')->first();
        $friendurls = friendurl::all();
        if($categoryId==0){
            $news=News::where('category_id',$categories[0]['id'])->where('is_display',1)->paginate(2);
        }else{
            $news=News::where('category_id',$categoryId)->where('is_display',1)->paginate(2);
        }
        return view('main.news',compact('news','categories','categoryId','rotations','pagenews','friendurls'));
    }

    public function inner($categoryId,$id)
    {
        $rotations = Rotation::all();
        $categories = Category::all();
        $pagenews=pageHead::where('name','新闻页面头部')->first();
        $news=News::where('category_id',$categoryId)->find($id);
        $friendurls = friendurl::all();
         $newssorts=News::where('category_id',$categoryId)->where('id','!=',$id)->get();
        return view('main.news_inner',compact('news','categories','rotations','pagenews','friendurls','newssorts'));
    }

    public function about(){

        $rotations = Rotation::all();
        $categories = Category::all();
        $pageabout=pageHead::where('name','关于页面头部')->first();
        $aboutone=aboutContent::where('name','走进睿泰')->first();
        $abouttwo=aboutContent::where('name','战略定位')->first();
        $aboutthree=aboutContent::where('name','发展历史')->first();
        $aboutfour=aboutContent::where('name','自主创新')->first();
        $friendurls = friendurl::all();
        return view('main.about',compact('categories','rotations','pageabout','aboutone','abouttwo','aboutthree','aboutfour','friendurls'));
    }
}
