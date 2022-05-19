
@extends('index')
@section('content')


<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1186153274812460";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script type='text/javascript'>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    (function () {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        var useSSL = 'https:' == document.location.protocol;
        gads.src = (useSSL ? 'https:' : 'http:') +
                '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
    })();

</script>

<div class="row margin-top-10px">
    <article class="col-sm-8 DetailsContent" style="padding-left: 0; display: inline-block;">
      
        <h1><?php echo $singlenewsdetails->post_name; ?></h1>
        <hr/>
<!--        <small>
            <i style="color: #2aa3d5" class="fa fa-pencil"></i> নিজস্ব প্রতিবেদক						<div class="pull-right hidden-print">
                <a href="#" onclick="fPrint()"><i style="color: #2aa3d5" class="fa fa-print fa-2x"></i></a>
            </div>
        </small>
        <br/>
        <small style="color:#9e9e9e;">
            <i style="color: #2aa3d5" class="fa fa-clock-o"></i> প্রকাশিত: ০৮:১০ পিএম, ১২ জানুয়ারি ২০১৭, বৃহস্পতিবার										| <i style="color: #2aa3d5" class="fa fa-clock-o"></i> আপডেট: ০৯:০৫ পিএম, ১২ জানুয়ারি ২০১৭, বৃহস্পতিবার						</small>-->
        <div class="content">
            <div class="contentimg">
                <img src="{{URL::to('/'.$singlenewsdetails->post_image)}}" alt="<?php echo $singlenewsdetails->post_name; ?>" title="<?php echo $singlenewsdetails->post_name; ?>" class="img-responsive">
            </div>
            <p><br />
                <?php echo $singlenewsdetails->post_short_description . '<br>' . $singlenewsdetails->post_long_description; ?>
            </p>				<div class="fb-quote"></div>
        </div>

        <!--
                    <div class="col-sm-6">
                         /88357171/Jago_Details_Bottom_Banner_B_335x50 
                        <div id='div-gpt-ad-1469119983028-2' style='height:50px; width:335px; margin-bottom: 10px;'>
                            <script type='text/javascript'>
                                googletag.cmd.push(function () {
                                    googletag.display('div-gpt-ad-1469119983028-2');
                                });
                            </script>
                        </div>
                    </div>-->
        <!--</div>-->

        <!--div class="hidden-print">
                <div class="addthis_relatedposts_inline"></div>
        </div-->

        <div class="DetailsComment hidden-print">
            <h2>আপনার মন্তব্য লিখুন...</h2>
            <div class="fb-comments" data-width="100%" data-href="http://www.jagonews24.com/national/news/192058/%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A7%8D%E0%A6%A6%E0%A6%BF%E0%A6%B7%E0%A7%8D%E0%A6%9F-%E0%A6%AE%E0%A7%87%E0%A7%9F%E0%A6%BE%E0%A6%A6-%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87-%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%9A%E0%A6%A8" data-numposts="10" data-colorscheme="light"></div>
        </div>
    </article>
    <aside class="col-sm-4 hidden-print" style="padding: 0;">
        <!--        <div class="hidden-xs">
                     /88357171/Jago_Details_Right_Top_Banner_315x115 
                    <div id='div-gpt-ad-1469119983028-4' style='height:115px; width:315px;'>
                            <script type='text/javascript'>
                                    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1469119983028-4'); });
                            </script>
                    </div>
                    <a href="https://www.facebook.com/PRANUPDRINK" rel="nofollow" target="_blank">
                        <img src="http://www.jagonews24.com/media/advertisement/2016October/PRAN-UP-Web-ad-330-150.gif" alt="PRAN" title="PRAN" style="margin-bottom: 10px;width: 100%;">
                    </a>
                </div>
                <div class="hidden-xs">
                    <a href="http://uttaraprobortancity.com" rel="nofollow" target="_blank">
                        <img src="http://www.jagonews24.com/media/advertisement/2016December/UttoraCityDestop.gif" alt="Probortan" title="Probortan" width="100%">
                    </a>
                </div>-->
        <div class="panel panel-primary" id="ElectedNews">
            <div class="panel panel-primary" id="ElectedNews">
                <div class="panel-heading text-center">{{ $singlenewsdetails->category_name}} এর আরও খবর</div>
                @foreach($all_post as $post)
                @if($post->category_name ==  $singlenewsdetails->category_name)
                <div class="media">
                    <div class="media-left">
                        <a href="{{URL::to('/news/'.$post->post_name)}}"><img src="{{URL::to('/'.$post->post_image)}}" alt="{{$post->post_name}}" width="480px" height="60px" /></a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a></h4>
                    </div>
                </div>
                @endif
                @endforeach
                <div style="margin: 5px 0;text-align: right;">
                    <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-right"></i> আরও খবর</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="DetailsNewsList">
            <div class="row" id="LatestNewsList">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">সর্বশেষ</a></li>
                    <li><a data-toggle="tab" href="#menu1">জনপ্রিয়</a></li>
                    <li><a data-toggle="tab" href="#menu2">আলোচিত</a></li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="panel panel-primary dLimit latestBox">
                            <div class="media"><div class="media-left"><a href="http://www.jagonews24.com/technology/news/192199/ইবুকের-ব্যবহার-ও-জনপ্রিয়তা-বাড়ছে"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/e-book_bangladesh-pic-md20170113025455.jpg" alt="ই-বুকের ব্যবহার ও জনপ্রিয়তা বাড়ছে"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/technology/news/192199/ইবুকের-ব্যবহার-ও-জনপ্রিয়তা-বাড়ছে">ই-বুকের ব্যবহার ও জনপ্রিয়তা বাড়ছে</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/campus/news/192196/ঢাবি-ক্যাম্পাসকে-সাইক্লিং-এবং-হাঁটাবান্ধব-করার-দাবি"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/du-cycle-md20170113023510.jpg" alt="ঢাবি ক্যাম্পাসকে সাইক্লিং এবং হাঁটাবান্ধব করার দাবি"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/campus/news/192196/ঢাবি-ক্যাম্পাসকে-সাইক্লিং-এবং-হাঁটাবান্ধব-করার-দাবি">ঢাবি ক্যাম্পাসকে সাইক্লিং এবং হাঁটাবান্ধব করার দাবি</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/law-courts/news/192193/সুরমা-নদী-থেকে-বালু-উত্তোলনে-হাইকোর্টের-নিষেধাজ্ঞা"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/hc20170113021943.jpg" alt="সুরমা নদী থেকে বালু উত্তোলনে হাইকোর্টের নিষেধাজ্ঞা"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/law-courts/news/192193/সুরমা-নদী-থেকে-বালু-উত্তোলনে-হাইকোর্টের-নিষেধাজ্ঞা">সুরমা নদী থেকে বালু উত্তোলনে হাইকোর্টের নিষেধাজ্ঞা</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/agriculture-and-nature/news/192190/বিএআরসির-নতুন-নির্বাহী-চেয়ারম্যান-ড.-জালাল-উদ্দীন"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/jalal20170113021007.jpg" alt="বিএআরসির নতুন নির্বাহী চেয়ারম্যান ড. জালাল উদ্দীন "></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/agriculture-and-nature/news/192190/বিএআরসির-নতুন-নির্বাহী-চেয়ারম্যান-ড.-জালাল-উদ্দীন">বিএআরসির নতুন নির্বাহী চেয়ারম্যান ড. জালাল উদ্দীন </a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/law-courts/news/192187/বিচার-বিভাগের-সঙ্গে-নির্বাহী-বিভাগের-টানাপোড়েন-নেই"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/a20170113015128.jpg" alt="বিচার বিভাগের সঙ্গে নির্বাহী বিভাগের টানাপোড়েন নেই"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/law-courts/news/192187/বিচার-বিভাগের-সঙ্গে-নির্বাহী-বিভাগের-টানাপোড়েন-নেই">বিচার বিভাগের সঙ্গে নির্বাহী বিভাগের টানাপোড়েন নেই</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/economy/news/192184/বাণিজ্য-মেলায়-স্বাস্থ্যসম্মত-খাবার-মানেই-‌ঝটপট"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/jhotpot-md20170113012114.jpg" alt="বাণিজ্য মেলায় স্বাস্থ্যসম্মত খাবার মানেই ‌‘ঝটপট’"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/economy/news/192184/বাণিজ্য-মেলায়-স্বাস্থ্যসম্মত-খাবার-মানেই-‌ঝটপট">বাণিজ্য মেলায় স্বাস্থ্যসম্মত খাবার মানেই ‌‘ঝটপট’</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/national/news/192181/মাদকাসক্ত-এক-ব্যক্তির-দ্বারা-পুরো-পরিবারে-ধ্বংস-নেমে-আসে"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/madok-md20170113005757.jpg" alt="মাদকাসক্ত এক ব্যক্তির দ্বারা পুরো পরিবারে ধ্বংস নেমে আসে"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/national/news/192181/মাদকাসক্ত-এক-ব্যক্তির-দ্বারা-পুরো-পরিবারে-ধ্বংস-নেমে-আসে">মাদকাসক্ত এক ব্যক্তির দ্বারা পুরো পরিবারে ধ্বংস নেমে আসে</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/national/news/192178/গাবতলীর-টায়ার-মার্কেটের-আগুন-নিয়ন্ত্রণে"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/fire20170113004000.jpg" alt="গাবতলীর টায়ার মার্কেটের আগুন নিয়ন্ত্রণে"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/national/news/192178/গাবতলীর-টায়ার-মার্কেটের-আগুন-নিয়ন্ত্রণে">গাবতলীর টায়ার মার্কেটের আগুন নিয়ন্ত্রণে</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/economy/news/192175/অনলাইন-পেমেন্ট-আরও-শক্তিশালী-করতে-পেইজা-ও-শিওরক্যাশের-চুক্তি"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/payza-md20170113003126.jpg" alt="অনলাইন পেমেন্ট আরও শক্তিশালী করতে পেইজা ও শিওরক্যাশের চুক্তি"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/economy/news/192175/অনলাইন-পেমেন্ট-আরও-শক্তিশালী-করতে-পেইজা-ও-শিওরক্যাশের-চুক্তি">অনলাইন পেমেন্ট আরও শক্তিশালী করতে পেইজা ও শিওরক্যাশের চুক্তি</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/national/news/192172/গাবতলীতে-টায়ার-মার্কেটে-আগুন"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/fire20170112235912.jpg" alt="গাবতলীতে টায়ার মার্কেটে আগুন"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/national/news/192172/গাবতলীতে-টায়ার-মার্কেটে-আগুন">গাবতলীতে টায়ার মার্কেটে আগুন</a>
                                    </h4>
                                </div></div>							</div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="panel panel-primary dLimit latestBox">
                            <div class="media"><div class="media-left"><a href="http://www.jagonews24.com/entertainment/news/191137/ওমরাহ-শেষে-দেশে-ফিরলেন-নিলয়শখ"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/photo-sm20170111165953.jpg" alt="ওমরাহ শেষে দেশে ফিরলেন নিলয়-শখ"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/entertainment/news/191137/ওমরাহ-শেষে-দেশে-ফিরলেন-নিলয়শখ">ওমরাহ শেষে দেশে ফিরলেন নিলয়-শখ</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/entertainment/news/191113/কলকাতার-ছবিতে-বাংলাদেশের-রোশান"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/roshan-sm20170111164150.jpg" alt="কলকাতার ছবিতে বাংলাদেশের রোশান"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/entertainment/news/191113/কলকাতার-ছবিতে-বাংলাদেশের-রোশান">কলকাতার ছবিতে বাংলাদেশের রোশান</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/191374/ধোনির-এক-সিদ্ধান্ত-বদলে-দিয়েছে-রোহিত-শর্মাকে"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/dhoni-sm20170111202233.jpg" alt="ধোনির ‘এক সিদ্ধান্ত’ বদলে দিয়েছে রোহিত শর্মাকে"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/191374/ধোনির-এক-সিদ্ধান্ত-বদলে-দিয়েছে-রোহিত-শর্মাকে">ধোনির ‘এক সিদ্ধান্ত’ বদলে দিয়েছে রোহিত শর্মাকে</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/191632/দিন-শেষে-বাংলাদেশের-সংগ্রহ-৩-উইকেটে-১৫৪"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/bangladesh-sm20170112120046.jpg" alt="দিন শেষে বাংলাদেশের সংগ্রহ ৩ উইকেটে ১৫৪ "></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/191632/দিন-শেষে-বাংলাদেশের-সংগ্রহ-৩-উইকেটে-১৫৪">দিন শেষে বাংলাদেশের সংগ্রহ ৩ উইকেটে ১৫৪ </a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/191350/শততম-টেস্টের-সামনে-দাঁড়িয়ে-আমলা"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/Amla-sm20170111200628.jpg" alt="শততম টেস্টের সামনে দাঁড়িয়ে আমলা"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/191350/শততম-টেস্টের-সামনে-দাঁড়িয়ে-আমলা">শততম টেস্টের সামনে দাঁড়িয়ে আমলা</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/191521/খেলা-আবার-শুরু-হাফ-সেঞ্চুরি-করে-ফিরলেন-তামিম"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/tamim-sm20170112063602.jpg" alt="খেলা আবার শুরু, হাফ সেঞ্চুরি করে ফিরলেন তামিম"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/191521/খেলা-আবার-শুরু-হাফ-সেঞ্চুরি-করে-ফিরলেন-তামিম">খেলা আবার শুরু, হাফ সেঞ্চুরি করে ফিরলেন তামিম</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/191605/মুমিনুলের-১১তম-হাফসেঞ্চুরি"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/muminul-sss20170112112359.jpg" alt="মুমিনুলের ১১তম হাফসেঞ্চুরি"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/191605/মুমিনুলের-১১তম-হাফসেঞ্চুরি">মুমিনুলের ১১তম হাফসেঞ্চুরি</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/national/news/191221/স্বামীর-এক-কথায়-আত্মহত্যার-সিদ্ধান্ত-আনিকার"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/shamim-anika-sm20170111182117.jpg" alt="স্বামীর ‘এক কথায়’ আত্মহত্যার সিদ্ধান্ত আনিকার"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/national/news/191221/স্বামীর-এক-কথায়-আত্মহত্যার-সিদ্ধান্ত-আনিকার">স্বামীর ‘এক কথায়’ আত্মহত্যার সিদ্ধান্ত আনিকার</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/country/news/191062/সাগরে-আটকা-পড়েছে-৭-শতাধিক-পর্যটক"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/SHIPING-sm20170111154546.jpg" alt="সাগরে আটকা পড়েছে ৭ শতাধিক পর্যটক"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/country/news/191062/সাগরে-আটকা-পড়েছে-৭-শতাধিক-পর্যটক">সাগরে আটকা পড়েছে ৭ শতাধিক পর্যটক</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/entertainment/news/191254/সালমানের-টিউবলাইট-ছবিতে-শাহরুখ"><img src="http://www.jagonews24.com/media/imgAll/2016October/SM/Salman-sm20170111184616.jpg" alt=" সালমানের টিউবলাইট ছবিতে শাহরুখ"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/entertainment/news/191254/সালমানের-টিউবলাইট-ছবিতে-শাহরুখ"> সালমানের টিউবলাইট ছবিতে শাহরুখ</a>
                                    </h4>
                                </div></div>							</div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="panel panel-primary dLimit latestBox">
                            <div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/77096/আইপিএলে-বাংলাদেশি-খেলোয়াড়দের-মূল্য-তালিকা"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/ipl-bangladesh-sm20160126041837.jpg" alt="আইপিএলে বাংলাদেশি খেলোয়াড়দের মূল্য তালিকা"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/77096/আইপিএলে-বাংলাদেশি-খেলোয়াড়দের-মূল্য-তালিকা">আইপিএলে বাংলাদেশি খেলোয়াড়দের মূল্য তালিকা</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/special-reports/news/77276/পৃথিবীর-আলো-দেখতে-চায়-ওরা"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/RAJBARI-ONDDO-sm20160127030715.jpg" alt="পৃথিবীর আলো দেখতে চায় ওরা"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/special-reports/news/77276/পৃথিবীর-আলো-দেখতে-চায়-ওরা">পৃথিবীর আলো দেখতে চায় ওরা</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/politics/news/76940/রাজনীতিতে-ফিরছেন-না-সোহেল-তাজ"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/Taj20160125062836.jpg" alt="রাজনীতিতে ফিরছেন না সোহেল তাজ"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/politics/news/76940/রাজনীতিতে-ফিরছেন-না-সোহেল-তাজ">রাজনীতিতে ফিরছেন না সোহেল তাজ</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/69533/সেই-কাপালিই-হিরো"><img src="http://www.jagonews24.com/media/imgAll/2015December/SM/kapali-md20151215164635.jpg" alt="সেই কাপালিই হিরো"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/69533/সেই-কাপালিই-হিরো">সেই কাপালিই হিরো</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/special-reports/news/76861/তিনি-এলেন-আপ্লুত-হলেন-করলেন-জাতিকেও"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/TAJ-sm20160124142118.jpg" alt="তিনি এলেন, আপ্লুত হলেন, করলেন জাতিকেও"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/special-reports/news/76861/তিনি-এলেন-আপ্লুত-হলেন-করলেন-জাতিকেও">তিনি এলেন, আপ্লুত হলেন, করলেন জাতিকেও</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/entertainment/news/77170/অবশেষে-মুক্তি-পাচ্ছে-শাবনূরের-নতুন-ছবি"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/Shabnur-S20160126100110.jpg" alt="অবশেষে মুক্তি পাচ্ছে শাবনূরের নতুন ছবি "></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/entertainment/news/77170/অবশেষে-মুক্তি-পাচ্ছে-শাবনূরের-নতুন-ছবি">অবশেষে মুক্তি পাচ্ছে শাবনূরের নতুন ছবি </a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/77084/মাশরাফির-মতোই-মাঠ-কাঁপাতে-চান-মোরসালিন"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/morsalin-mashrafe-md20160125235309.jpg" alt="মাশরাফির মতোই মাঠ কাঁপাতে চান মোরসালিন"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/77084/মাশরাফির-মতোই-মাঠ-কাঁপাতে-চান-মোরসালিন">মাশরাফির মতোই মাঠ কাঁপাতে চান মোরসালিন</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/76836/ওয়ানডের-সেরা-দুইয়ে-সাকিব"><img src="http://www.jagonews24.com/media/imgAll/2016January/SM/shakib-sm20160124124233.jpg" alt="ওয়ানডের সেরা দুইয়ে সাকিব"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/76836/ওয়ানডের-সেরা-দুইয়ে-সাকিব">ওয়ানডের সেরা দুইয়ে সাকিব</a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/68604/পাকিস্তান-লিগে-বাংলাদেশি-১০-ক্রিকেটার"><img src="http://www.jagonews24.com/media/imgAll/2015December/SM/shakib-tamim-sm20151211043049.jpg" alt="পাকিস্তান লিগে বাংলাদেশি ১০ ক্রিকেটার "></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/68604/পাকিস্তান-লিগে-বাংলাদেশি-১০-ক্রিকেটার">পাকিস্তান লিগে বাংলাদেশি ১০ ক্রিকেটার </a>
                                    </h4>
                                </div></div><div class="media"><div class="media-left"><a href="http://www.jagonews24.com/sports/news/69494/আলোচনার-কেন্দ্রবিন্দুতে-নাফিসা-কামাল"><img src="http://www.jagonews24.com/media/imgAll/2015December/SM/Nafisa-Kamal-sm20151215141505.jpg" alt="আলোচনার কেন্দ্রবিন্দুতে নাফিসা কামাল"></a></div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="http://www.jagonews24.com/sports/news/69494/আলোচনার-কেন্দ্রবিন্দুতে-নাফিসা-কামাল">আলোচনার কেন্দ্রবিন্দুতে নাফিসা কামাল</a>
                                    </h4>
                                </div></div>							</div>
                    </div>
                </div>
            </div>
        </div>
    </aside>    
</div>

@endsection