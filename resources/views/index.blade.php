
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Banglarsomoy</title>

        <!-- <link rel="canonical" href="your domain"> -->
        <!--meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="pragma" content="no-cache"-->
        <link rel="shortcut icon" type="{{asset('public/images/x-icon')}}" href="Put your shortcut icon link here" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="top">
        <div id="fb-root"></div>
        <!-- End Google Tag Manager -->
        <div class="visible-print-inline-block HeaderPrint text-center">
            <img src="" alt="your News logo" title="Your News logo">
        </div>
        <header class="container hidden-print">

            <div class="row">
                <div class="col-sm-12 border-top-red">
                    <div class="row text-center">
                        <div class="pull-left" id="HeaderDateTime">ঢাকা, রোববার, ২৫ সেপ্টেম্বর ২০১৬ | ১০&nbsp;আশ্বিন&nbsp;১৪২৩ বঙ্গাব্দ	</div>
                        <div class="pull-right hidden-xs" id="HeaderIconSearch">
                            <a href="#" target="_blank"><div class="btn bg-aches btn-sm hidden-xs">English Version</div></a>
                            <a href="https://www.facebook.com/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a>
                            <a href="https://plus.google.com/" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>
                            <a href="http://www.youtube.com/" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
                            <a href="https://play.google.com/store/apps/" target="_blank" rel="nofollow"><i class="fa fa-android" style="color: #A5d11c;"></i></a>
                            <a href="https://www.microsoft.com/en-us/store/apps/" target="_blank" rel="nofollow"><i class="fa fa-windows" style="color: #00ade5;"></i></a>
                            <a href="https://itunes.apple.com/us/app/" target="_blank" rel="nofollow"><i class="fa fa-apple" style="color: #999;"></i></a>
                            <a href="#" target="_blank" rel="nofollow"><i class="fa fa-rss"></i></a>

                            <form class="navbar-form navbar-right" role="search" action="http://www.google.com/cse" target="_blank"  id="HeaderSearch">
                                <div class="form-group hidden-xs">
                                    <input type="hidden" name="cx" value="009737550856177646857:g5gonwr4hw8" />
                                    <input type="text" name="q" id="q" value="" class="form-control input-sm bg-aches" placeholder="অনুসন্ধান">
                                </div>
                                <button type="submit" class="btn btn-default btn-sm bg-aches hidden-xs" name="sa" id="sa" value="" ><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 headSection">
                    <div class="visible-xs text-center">
                        <a href="">
                            <img src="" alt="Your News logo" title="Your News logo" id="HeaderLogo">
                        </a>
                    </div>
                    <div class="pull-left hidden-xs">
                        <a href="{{URL::to('/')}}"><img src="{{asset('public/logo/logo.jpg')}}" class="img-responsive" alt="Your News logo" title="Your News logo" id="HeaderLogo"></a>
                    </div>
                    <div class="pull-right hidden-xs">
                        <h2 style="color: rgb(255, 0, 0);">Contact Us for place your Ad here...</h2>
                        <p>picture-size: 450X70 pixel</p>
                        <h4>
                            <strong>Cell:</strong>
                            +8801917153451
                            <strong>Email:</strong>
                            ramijul007@gmail.com
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row" id="nav">
                <nav class="navbar navbar-default" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        $all_published_category = DB::table('tbl_category')
                                ->where('publication_status', 1)
                                ->get();
                        ?>
                        <ul class="nav navbar-nav">
                            <li><a href="{{URL::to('/')}}">প্রচ্ছদ</a></li>
                            <?php
                            foreach ($all_published_category as $menu_list) {
                                ?>
                                <!--                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">বাংলাদেশ <b class="caret"></b></a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="#">জাতীয়</a></li>
                                                                    <li><a href="#">জাতীয়</a></li>
                                                                    <li><a href="#">জাতীয়</a></li>
                                                                    <li><a href="#">জাতীয়</a></li>
                                                                </ul>
                                                            </li>-->
                                <!--<li><a href="#">{{$menu_list->category_name}}</a></li>-->
                                <li><a href="{{URL::to('/news-category/'.$id = $menu_list->category_name)}}"><?php echo $menu_list->category_name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <section class="container">
            @yield('content')
        </section>

        <footer class="container">
            <div class="row Footer">
                <div class="row hidden-print" style="padding: 0;margin: 0;">
                    <div class="col-sm-12 hidden-xs">
                        <div class="DFooter1Menu text-center">
                            <ul class="list-inline">
                                <li><a href="#">বইমেলা</a></li>
                                <li><a href="#">নারী ও শিশু</a></li>
                                <li><a href="#">ভ্রমণ</a></li>
                                <li><a href="#">কৃষি ও প্রকৃতি</a></li>
                                <li><a href="#">ক্যাম্পাস</a></li>
                                <li><a href="#">ফিচার</a></li>
                                <li><a href="#">দরকারি</a></li>
                                <li><a href="#">আমাদের কথা</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center hidden-xs" style="border-top: 2px solid #CC2223; padding: 10px;margin: 5px 0;font-size: 12px;">
                        <h1 style="font-size: 12px;font-weight: normal;display: inline;">banglarsomoy.com is one of the popular bangla news portals. </h1><p style="display: inline;">It has begun with commitment of fearless, investigative, informative and independent journalism. This online portal has started to provide real time news updates with maximum use of modern technology from 2014. Latest & breaking news of home and abroad, entertainment, lifestyle, special reports, politics, economics, culture, education, information technology, health, sports, columns and features are included in it. Being a news focused site, it contains all the elements of traditional newspapers. You will get news fast and first before newspaper.  An expert team of Jago News has been built with a group of country's renowned young journalists. We are trying to build a bridge with Bengalis around the world and adding a new dimension to online news portal. </p>
                    </div>
                </div>
                <div class="row" style="padding: 0;margin: 0;">
                    <div class="col-xs-12 col-sm-3 FooterLink hidden-xs hidden-print">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">
                                <a href="#" target="_blank" rel="nofollow" class="popupwindow">বাংলারসময় এফএম</a>
                            </li>
                            <!--					<li class="list-group-item list-group-item-info">
                                                                            <a href="/magazine/halkhata-1423" target="_blank">হালখাতা  ১৪২৩</a>
                                                                    </li>-->
                            <li class="list-group-item list-group-item-danger">
                                <a href="#" target="_blank">ইউনিকোড কনভার্টার</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-4 hidden-print">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">অ্যাপস</div>
                            <div class="panel-body text-center">
                                <a href="#" target="_blank" rel="nofollow"><i class="fa fa-android fa-4x" style="color: #A5d11c;"></i></a>
                                <a href="#" target="_blank" rel="nofollow"><i class="fa fa-windows fa-4x" style="color: #00ade5;padding: 0 40px;"></i></a>
                                <a href="#" target="_blank" rel="nofollow"><i class="fa fa-apple fa-4x" style="color: #999;"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 hidden-print">
                        <div class="fb-page" data-href="https://www.facebook.com/" data-width="385px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/groups/1490471647942720/"><a href="https://www.facebook.com/groups/1490471647942720/">banglarsomoy.com</a></blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 0;margin: 0;">
                    <div class="col-sm-3 hidden-xs hidden-print" style="border-right: 3px solid #fff;">
                         <a href="{{URL::to('/')}}"><img src="{{asset('public/logo/logo.jpg')}}" class="img-responsive" alt="Banglarsomoy Logo" title="Banglarsomoy Logo" id="FooterLogo"></a>
                    </div>
                    <div class="col-sm-4 text-center FooterInfo" style="border-right: 3px solid #fff;">
                        সম্পাদক : ........<br/>
                        একেসি প্রাইভেট লিমিটেডের একটি প্রতিষ্ঠান<br/>
                        <div class="hidden-xs">
                            © ২০১৬ সর্বস্বত্ব সংরক্ষিত | yournews.কম<br/>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center FooterInfo">
                        ..... কমফোর্ট কমপ্লেক্স (৫ম তলা)<br/>
                        গ-১৩০/এ প্রগতি সরণি, মধ্যবাড্ডা, ঢাকা-১২১২<br/>
                        ফোন: ৮৮ ০২ ৯৮৯৪২৬৮ ফ্যাক্স: ৮৮ ০২ ৯৮৯৪৮২৬<br/>
                        ই-মেইল: info@yoursite.com,yoursite@gmail.com
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 20px;">
                <div class="col-sm-12 bg-primary text-center">
                    বাংলারসময় নিউজে প্রকাশিত/প্রচারিত সংবাদ, আলোকচিত্র, ভিডিওচিত্র, অডিও বিনা অনুমতিতে ব্যবহার করা বেআইনি
                </div>
            </div>
            <div class="alert alert-dismissible navbar-fixed-bottom visible-xs text-center hidden-print" role="alert" id="FooterFixedAdv">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <!--<a href="https://www.facebook.com/pranfrooto" rel="nofollow" target="_blank"><img src="/media/advertisement/2016July/pranfooto-320x50.gif" alt="Frooto" title="Frooto" width="100%"></a>-->

                <!-- /88357171/Jago_Footer_Sticky_400x65 -->
                <div id='div-gpt-ad-1469119983028-8'>
                    <!-- Ad Portion -->
                </div>
            </div>
        </footer>
        <script>(function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-11428839-44', 'auto');
            ga('send', 'pageview');</script><a href="#0" class="cd-top">Top</a>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/{{asset('public/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="http://www.jagonews24.com/common/{{asset('public/js/getDistrict.js')}}"></script>
        <script type="text/javascript" src="http://www.jagonews24.com/common/{{asset('public/js/jquery.popupwindow.js')}}"></script>
        <script type="text/javascript" src="http://www.jagonews24.com/common/{{asset('public/js/custom.js')}}"></script>
        <script type="text/javascript">
            //	$('#LatestCarousel').carousel({interval:16000});
            $('#LatestCarousel2').carousel({interval: 16000});
            $('#PhotoCarousel').carousel({interval: 4500});
        </script>
    </body>
</html>
