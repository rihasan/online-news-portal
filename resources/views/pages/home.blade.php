
@extends('index')
@section('content')

<div class="row" id="LeadNews">
    <div class="col-sm-5 col-xs-12" id="LeadNewsBox">
        <a href="{{URL::to('/news/'.$leadnews->post_name)}}"><img src="{{$leadnews->post_image}}" alt="" style="width:100%;height:208px;" ></a>
        <div>
            <h2><a href="{{URL::to('/news/'.$leadnews->post_name)}}">{{$leadnews->post_name}}</a></h2><p><?php echo $leadnews->post_short_description; ?></p>
        </div>		
    </div>
    <div class="col-sm-3 col-xs-12">
        <div id="LatestNewsListNew">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="">সর্বশেষ</a></li>
                <li><a data-toggle="tab" href="">জনপ্রিয়</a></li>
            </ul>
            <div class="tab-content">
                <div id="" class="tab-pane fade in active">
                    <div class="panel panel-primary dLimit latestBox">
                        <div class="media">
                            <div class="media-left">
                                <a href=""> <img src="http://www.jagonews24.com/media/imgAll/2016June/SM/hamid20160925132722.jpg" width="90px" height="50px" alt="চট্টগ্রামে নতুন ডিসির যোগদান" ></a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">চট্টগ্রামে নতুন ডিসির যোগদান </a>
                                </h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="#"><img src="http://www.jagonews24.com/media/imgAll/2016June/SM/hamid20160925132722.jpg" alt="বাংলালিংকে কর্মী ছাটাই বন্ধের দাবিতে মানববন্ধন"></a></div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">বাংলালিংকে কর্মী ছাটাই বন্ধের দাবিতে মানববন্ধন</a>
                                </h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href=""> <img src="http://www.jagonews24.com/media/imgAll/2016June/SM/hamid20160925132722.jpg" width="90px" height="50px" alt="চট্টগ্রামে নতুন ডিসির যোগদান" ></a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">চট্টগ্রামে নতুন ডিসির যোগদান </a>
                                </h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="#"><img src="http://www.jagonews24.com/media/imgAll/2016June/SM/hamid20160925132722.jpg" alt="বাংলালিংকে কর্মী ছাটাই বন্ধের দাবিতে মানববন্ধন"></a></div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">বাংলালিংকে কর্মী ছাটাই বন্ধের দাবিতে মানববন্ধন</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a href="#" class="btn btn-sm btn-block btn-primary" style="font-size: large;">আজকের সবখবর</a>
        </div>
    </div>
    <div class="col-sm-4 hidden-xs" id="Opinion">
        <div class="panel panel-primary">
            <div class="panel-heading text-center "><a href="#"> মতামত</a></div>
            @foreach($all_published_opinion_post as $post)
            @if($post->category_id == 6)
            <div class="media">
                <div class="media-left">
                    <a href="{{URL::to('/news/'.$post->post_name)}}"><img src="{{URL::to('/'.$post->post_image)}}" alt="{{$post->post_name}}" width="480px" height="60px"  /></a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a></h4>
                </div>
            </div>
            @endif
            @endforeach
            <!-- /88357171/Jago_Opinion_Bottom_Banner_335x150 -->
            <!-- <div id='div-gpt-ad-1469119983028-11' style='height:150px; width:335px;'>
            Ad Portion
            </div> -->
        </div>
    </div>
</div>



<div class="row" id="SpecialLeatest" style="padding-top: 10px;">
    <div class="col-sm-8 col-xs-12" id="SpecialBox">
        @foreach($all_home_post as $post)
        <div class="col-sm-4 col-xs-12">
            <a href="{{URL::to('/news/'.$post->post_name)}}"><img src="{{$post->post_image}}" alt="{{$post->post_name}}" width="230px" height="120px" ></a>
            <h2><a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a></h2>
        </div>
        @endforeach
    </div>
    <div class="col-sm-4 col-xs-12">
        <div class="row" style="margin-bottom:5px;">
            <div class="well well-sm" style="margin-bottom: 0;">
                <form action="#" method="post">
                    <label for="txtEmail" style="font-size: small;">নিয়মিত আপডেট পেতে নিচে আপনার ই-মেইল লিখুন</label>
                    <div class="input-group">
                        <input id="txtEmail" name="txtEmail" type="email" class="form-control" placeholder="Your Email..." required="required">
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="submit" name="btnSubmit">Subscribe</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5px;">
            <!-- /88357171/Jago_Special_Box_Right_Banner_A_330x100 -->
            <div id='div-gpt-ad-1469119983028-15' style='height:100px; width:330px;'>
                <!-- Ad portion -->
            </div>
        </div>

        <div class="row">
            <script type="text/javascript" src="{{asset('public/js/PrayTimes.js')}}"></script>
            <div id="tablePrayTimes" class="table-responsive"></div>
            <div id="dateBN" class="hidden">নামাজের সময়সূচি  -  ২৫ সেপ্টেম্বর, ২০১৬</div>
            <script type="text/javascript">
var dateBN = document.getElementById("dateBN").innerHTML;
var date = new Date(); // today
var times = prayTimes.getTimes(date, [23.777176, 90.399452], +6, "auto", "12h");
var list = ['Fajr', 'Dhuhr', 'Asr', 'Maghrib', 'Isha'];
var listBN = ['ফজর', 'জোহর', 'আসর', 'মাগরিব', 'ইশা'];
var listTime = ['ভোর', 'বেলা', 'বিকেল', 'সন্ধ্যা', 'রাত'];
var listSun = ['sunrise', 'sunset'];
var listSunBN = ['আগামীকালের সূর্যোদয়', 'আজ সূর্যাস্ত'];
var listSunTime = ['ভোর', 'সন্ধ্যা'];

function en_to_bn_number_conversion(en_number) {
    var bn_number = '';
    for (var i = 0; i < en_number.length; i++) {
        if (en_number[i] == '0')
            bn_number = bn_number + "০";
        if (en_number[i] == '1')
            bn_number = bn_number + "১";
        if (en_number[i] == '2')
            bn_number = bn_number + "২";
        if (en_number[i] == '3')
            bn_number = bn_number + "৩";
        if (en_number[i] == '4')
            bn_number = bn_number + "৪";
        if (en_number[i] == '5')
            bn_number = bn_number + "৫";
        if (en_number[i] == '6')
            bn_number = bn_number + "৬";
        if (en_number[i] == '7')
            bn_number = bn_number + "৭";
        if (en_number[i] == '8')
            bn_number = bn_number + "৮";
        if (en_number[i] == '9')
            bn_number = bn_number + "৯";
        if (en_number[i] == ':')
            bn_number = bn_number + ":";
    }
    return bn_number;
}
var html = '<table id="timetable" class="table table-striped table-bordered" style="border: 2px solid #0A9EE4;">';
// You can use this portion for Ad with href & img src
// html += '<tr><td colspan="2" class="text-center" style="padding: 4px;"><a href="" target="_blank" rel="nofollow"><img src="" alt="sera-water-tank" title="sera-water-tank" style="width:100%;border: 0;"></a></td></tr>';
html += '<tr><th colspan="2" class="text-center" style="color: #0e9442;font-size: large;">' + dateBN + '</th></tr>';
for (var i in list) {
    if (i == 2) {
        var times = prayTimes.getTimes(date, [23.777176, 90.399452], +7.3, "auto", "12h");
    } else {
        var times = prayTimes.getTimes(date, [23.777176, 90.399452], +6, "auto", "12h");
    }
    var timeEN = times[list[i].toLowerCase()];
    html += '<tr><td class="text-center">' + listBN[i] + '</td>';
    html += '<td class="text-center">' + listTime[i] + " " + en_to_bn_number_conversion(times[list[i].toLowerCase()]) + ' মিনিট </td></tr>';
}
html += '<tr><td class="text-center" style="border: 2px solid #0A9EE4;">' + listSunBN[0] + "<br/>" + listSunTime[0] + " " + en_to_bn_number_conversion(times[listSun[0].toLowerCase()]) + ' মিনিট </td>';
html += '<td class="text-center" style="border: 2px solid #0A9EE4;">' + listSunBN[1] + "<br/>" + listSunTime[1] + " " + en_to_bn_number_conversion(times[listSun[1].toLowerCase()]) + ' মিনিট </td></tr>';
html += '</table>';
document.getElementById('tablePrayTimes').innerHTML = html;
            </script>
        </div>
    </div>
</div>
<span style="color: red; font-size: 26px ">.........................................................................................................................................</span>
<!--<div class="row" id="ExclusiveNew">
    <div class="col-sm-3">
        <a href="#"><img src="http://www.jagonews24.com/media/imgAll/2016June/SM/haturu-singhe-sm20160924183346.jpg" alt="তিনটি ম্যাচই জিততে চান হাথুরুসিংহে" class="img-responsive"></a>
        <a href="#"><h4>তিনটি ম্যাচই জিততে চান হাথুরুসিংহে</h4></a>
    </div>	
</div>-->

<div class="row DAdd hidden-xs">
    <div class="col-sm-6">
        <!--<a href="https://www.facebook.com/pranfrooto" rel="nofollow" target="_blank">
                <img src="/media/advertisement/2015June/Frooto-gif-480x70.gif" alt="Frooto" title="Frooto">
        </a>-->
        <!-- /88357171/Jago_National_Top_Banner_A_385x70 -->
        <div id='div-gpt-ad-1469119983028-9' style='height:70px; width:385px;'>
            <!-- add portion -->
        </div>
    </div>
    <div class="col-sm-6">
        <!--<a href="https://www.facebook.com/pranspicepowdergcc" rel="nofollow" target="_blank">
                <img src="/media/advertisement/2015June/Pran-Spice-480x70.gif" alt="Pran-Spice" title="Pran-Spice">
        </a>-->
        <!-- /88357171/Jago_National_Top_Banner_B_385x70 -->
        <div id='div-gpt-ad-1469119983028-10' style='height:70px; width:385px;'>
            <!-- add portion -->
        </div>
    </div>
</div>




<div class="row margin-top-10px">
    <div class="row">
        <div class="col-sm-4 CatSingleBox">
            <div class="panel panel-primary">
                <div class="panel-heading cat-ash"><a href="#"> জাতীয় </a></div>
                <div class="panel-body">
                    <a href="#"><img src="http://www.jagonews24.com/media/imgAll/2016June/SM/Style20160924211832.jpg" alt="৭৫ শতাংশ লভ্যাংশ ঘোষণা করেছে স্টাইলক্রাফট" class="img-responsive" ></a>
                </div>
                @foreach($all_published_national_post as $post)
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a>
                    </li>
                </ul>
                @endforeach
                <div class="pull-right"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> আরও খবর</a></div>
            </div>
        </div>
        <div class="col-sm-4 CatSingleBox">
            <div class="panel panel-primary">
                <div class="panel-heading cat-blue"><a href="#"> আন্তর্জাতিক</a></div>
                <div class="panel-body">
                    <a href="#"><img src="http://www.jagonews24.com/media/imgAll/2016June/SM/IS-sm20160924215440.jpg" alt="আয় কমেছে ইসলামিক স্টেটের" class="img-responsive" ></a>
                </div>
                @foreach($all_published_international_post as $post)
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a>
                    </li>
                </ul>
                @endforeach
                <div class="pull-right"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> আরও খবর</a></div>
            </div>
        </div>
        <div class="col-sm-4 CatSingleBox">
            <div class="panel panel-primary">
                <div class="panel-heading cat-pink"><a href="#"> লাইফস্টাইল</a></div>
                <div class="panel-body">
                    <a href="#"><img src="http://www.jagonews24.com/media/imgAll/2016June/SM/Ilish-Maach-sm20160924172908.jpg" alt="যেভাবে রাঁধবেন ইলিশের দোপেঁয়াজা" class="img-responsive" ></a>
                </div>
                @foreach($all_published_life_style_post as $post)
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{URL::to('/news/'.$post->post_name)}}">{{$post->post_name}}</a>
                    </li>
                </ul>
                @endforeach

                <div class="pull-right"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> আরও খবর</a></div>
            </div>
        </div>
    </div>
</div>

<div class="row DAdd hidden-xs">
    <div class="col-sm-6">
        <!--<a href="https://www.facebook.com/pranfrooto" rel="nofollow" target="_blank">
                <img src="/media/advertisement/2015June/Frooto-gif-480x70.gif" alt="Frooto" title="Frooto">
        </a>-->
        <!-- /88357171/Jago_National_Top_Banner_A_385x70 -->
        <div id='div-gpt-ad-1469119983028-9' style='height:70px; width:385px;'>
            <!-- add portion -->
        </div>
    </div>
    <div class="col-sm-6">
        <!--<a href="https://www.facebook.com/pranspicepowdergcc" rel="nofollow" target="_blank">
                <img src="/media/advertisement/2015June/Pran-Spice-480x70.gif" alt="Pran-Spice" title="Pran-Spice">
        </a>-->
        <!-- /88357171/Jago_National_Top_Banner_B_385x70 -->
        <div id='div-gpt-ad-1469119983028-10' style='height:70px; width:385px;'>
            <!-- add portion -->
        </div>
    </div>
</div>

</div>

@endsection