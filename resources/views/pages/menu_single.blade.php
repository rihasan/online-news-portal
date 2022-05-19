
@extends('index')
@section('content')
<style type="text/css">
    h1{display: inline;font-size: 1.2em;}
</style>
<div class="row margin-top-10px">
    <div class="row">
        <section class="col-sm-8">
            <div class="row" id="CatContent">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li itemscope itemtype="">
                            <a href="{{URL::to('/')}}" itemprop="url">
                                <span itemprop="title" style="display: none;">Home</span>
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="active" itemscope itemtype="">
                            <a href="{{URL::to('/')}}" itemprop="url">
                                <h1 itemprop="title">{{$id}}</h1>
                            </a>
                        </li>
                    </ol>
                </div>

                @foreach($all_post as $post)
                <div class="col-sm-4 col-xs-12">
                    <a href="{{URL::to('/news/'.$post->post_name)}}"><img src="{{URL::to('/'.$post->post_image)}}" alt="{{$post->post_name}}" width="200px" height="140px" ></a>
                    <h2><a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a></h2>
                </div>
                @endforeach
            </div>


            <!--<div class="row">
                    
            </div>-->
        </section>
        <aside class="col-sm-4 col-xs-12">

            <div class="clearfix"></div>
            <div class="panel panel-primary DetailsNewsList">
                <div class="row" id="LatestNewsList">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">সর্বশেষ</a></li>
                        <li><a data-toggle="tab" href="#menu1">জনপ্রিয়</a></li>
                        <li><a data-toggle="tab" href="#menu2">আলোচিত</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="panel panel-primary dLimit latestBox">
                                <div class="media"><div class="media-left"><a href=""><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/harun-sm20170114005021.jpg" alt=""></a></div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="">আইএসএন রশিদ</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="panel panel-primary dLimit latestBox">
                                <div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/192295/ছক্কা-হাকিয়ে-সাকিবমুশফিকের-নতুন-রেকর্ড"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/shakib-sm20170113101334.jpg" alt="ছক্কা হাকিয়ে সাকিব-মুশফিকের নতুন রেকর্ড"></a></div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="http://www.jagonews24.com/sports/news/192295/ছক্কা-হাকিয়ে-সাকিবমুশফিকের-নতুন-রেকর্ড">ছক্কা হাকিয়ে সাকিব-মুশফিকের নতুন রেকর্ড</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="panel panel-primary dLimit latestBox">
                                <div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/77096/আইপিএলে-বাংলাদেশি-খেলোয়াড়দের-মূল্য-তালিকা"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/ipl-bangladesh-sm20160126041837.jpg" alt="আইপিএলে বাংলাদেশি খেলোয়াড়দের মূল্য তালিকা"></a></div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="http://www.jagonews24.com/sports/news/77096/আইপিএলে-বাংলাদেশি-খেলোয়াড়দের-মূল্য-তালিকা">আইপিএলে বাংলাদেশি খেলোয়াড়দের মূল্য তালিকা</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="panel panel-primary" id="ElectedNews">
                <div class="panel-heading text-center">{{$id}} এর আরও খবর</div>
                @foreach($all_post as $post)
                <div class="media">
                    <div class="media-left">
                        <a href="{{URL::to('/news/'.$post->post_name)}}"><img src="{{URL::to('/'.$post->post_image)}}" alt="{{$post->post_name}}" width="480px" height="60px"  /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a></h4>
                    </div>
                </div>
                @endforeach
                <div style="margin: 5px 0;text-align: right;">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-right"></i> আরও খবর</a>
                </div>
            </div>
        </aside>
    </div>

</div>

@endsection