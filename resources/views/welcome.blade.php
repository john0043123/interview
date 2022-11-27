
<!DOCTYPE html>
<html lang="zh-TW">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#231815">
    <meta name="apple-mobile-web-app-status-bar-style" content="#231815">
    <meta name="description" content="案例列表的描述">
    <meta name="keywords" content="廣告,廣告成效,小編,社群,行銷,粉絲團經營,FB經營,社群行銷,行銷企劃,粉專,網路行銷,數位廣告,品牌經營,品牌營銷,機器人,粉絲團機器人,內容行銷,網紅行銷,KOL,KOC,受眾,消費者輪廓,轉換率,點擊率,銷售,粉絲團爆文,銷售型文案,廣告代操,廣告公司,廣告投放,出租小編,設計外包,費用,客製化專案,網頁設計,品牌形象,電商">
    <meta property="og:type" content="website">
    <meta property="og:title" content="精選案例 - Uninn 雲時代">
    <meta property="og:description" content="案例列表的描述">
    <meta property="og:image" content="https://www.uninn.com.tw/storage/images/resources/logo.svg">
    <meta property="og:url" content="https://www.uninn.com.tw/portfolios">


    <meta name="robots" content="index,follow" />


    <link rel="shortcut icon" href="/https://www.uninn.com.tw/storage/images/resources/favicon.svg">
    <title>精選案例 | Uninn 雲時代</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://www.uninn.com.tw/themes/uninn/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://www.uninn.com.tw/themes/uninn/assets/css/unin.css" rel="stylesheet">


</head>

<body>

<div class="body_wrap">
    <!-- header.site_header -->
    @include("header")

    <!-- .page_main -->
    <!-- =========================================================================-->
    <!-- 頁面內容  START-->
    <!-- =========================================================================-->

    <div class="page_main page-portfolio portfolio-archive">
        <section class="page_section portfolio-archive-wrapper">
            <div class="page_section-inner">
                <div class="page_section-content">
                    <h2 class="page_title">{{ __('portfolio.selected_case') }}</h2><!-- /.page_title -->
                    <div class="portfolio--wrapper">
                        <div class="portfolio--types-mb">
                            <div class="txt">類別篩選</div>
                            <div class="icon"></div>
                        </div><!-- /.portfolio--types-mb -->

                        <ul class="portfolio--types lis-n">
                            <li class="portfolio--types-title">可複選</li>

                            <li data-id="BRAND" class="portfolio--types-item">
                                <div class="portfolio--types-item-inner"><span class="portfolio--types-item-txt">{{ __('portfolio.BRAND') }}</span> <span class="portfolio--types-item-icon"></span></div>
                            </li>
                            <li data-id="FLAT_DESIGN" class="portfolio--types-item">
                                <div class="portfolio--types-item-inner"><span class="portfolio--types-item-txt">{{ __('portfolio.FLAT_DESIGN') }}</span> <span class="portfolio--types-item-icon"></span></div>
                            </li>
                            <li data-id="WEB_DESIGN" class="portfolio--types-item">
                                <div class="portfolio--types-item-inner"><span class="portfolio--types-item-txt">{{ __('portfolio.WEB_DESIGN') }}</span> <span class="portfolio--types-item-icon"></span></div>
                            </li>
                            <li class="portfolio--types-btn"><button href="javascript:;" class="main-btn-mb">確定</button></li>
                        </ul><!-- /.portfolio--types -->
                        <div class="portfolio--content">
                            <section class="portfolio--content-inner">
                                <ul class="profolio_list">
                                    @foreach($portfolios as $p)
                                        <!-- /.profolio_item -->
                                        <li data-id="{{ $p->id }}" class="profolio_item">
                                            <a href="/portfolio/{{ $p->id }}" class="profolio_item-link">
                                                <span class="img_elm">
                                                    <img src="{{ \Illuminate\Support\Facades\Storage::disk('admin')->url($p->images[0]->path) }}" alt="{{ $p->images[0]->path }}">
                                                </span>
                                                <span class="profolio_item-content">
                                                    <span class="name">{{ $p->detail->name }}｜{{ $p->detail->type }}</span>
                                                    <span class="category">{{  __('portfolio.' . $p->detail->category) }}</span>
                                                </span>
                                            </a>
                                        </li>

                                    @endforeach


                                </ul>
                            </section><!-- /.portfolio--content-inner -->

                        </div><!-- /.uninn_tabs-content -->
                    </div>
                </div>
            </div>
        </section>
    </div><!-- /.page_main END  !! -->

    <script defer="defer" src="https://www.uninn.com.tw/themes/uninn/assets/js/portfolio-archive.js"></script>
    <script defer="defer">
        $('.portfolio--types-item').click(function(e){

            current = $(this);
            selected = [];
            $('.profolio_item').hide();

            if(!$(this).hasClass('js-active')){
                selected.push($(this).data('id'));
            }

            $('.portfolio--types-item').each(function(){
                if($(this).data('id') !== current.data('id') && ($(this).hasClass('js-active'))){
                    selected.push($(this).data('id'));
                }
            })

            console.log(selected);

            $.ajaxSetup({
                headers: {
                    // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                }
            });

            $.ajax({
                type:'POST',
                // url:'/api/exp',
                url:'/filter/portfolio',
                dataType:'json',
                data:{
                    input: selected,
                },
                success:function(data) {
                    if(data !== 'all') {
                        console.log(data);
                        $(data).each(function(index, value){
                            $("li[data-id='"+value+"']").show();
                        })
                    } else if(data.length > 0){
                        $('.profolio_item').show();
                    } else{
                        console.log('data??');
                        $('.profolio_list-more').before("<div>暫時無案例，請試試其他的項目。</div>")
                    }

                }
            });
        });
    </script>
    <!-- /.page_main END  !! -->
    <!-- =========================================================================-->
    <!-- 頁面內容  END  !!-->
    <!-- =========================================================================-->
    <!-- footer.site_footer -->
    <footer class="site_footer">
        <div class="site_footer-container">
            <div class="footer-bottom">
                <nav>
                    <ul>
                        <li><a href="/social">出租小編</a></li>
                        <li class="nav-have-child">服務項目
                            <ul>
                                <li><a href="/service/branding-design">品牌形象</a></li>
                                <li><a href="/service/graphic-design">平面設計</a></li>
                                <li><a href="/service/advertise">數位廣告</a></li>
                                <li><a href="/service/web-design">網頁設計</a></li>
                                <li><a href="/service/consultancy-service">顧問服務</a></li>
                                <li><a href="/service/customized">客製化包月服務</a></li>
                            </ul>


                        </li>
                    </ul>
                    <ul>
                        <li><a href="/portfolios">作品案例</a></li>
                        <li><a href="/about">關於我們</a></li>
                        <li><a href="/posts">數位聚落</a></li>
                    </ul>
                </nav>
                <div class="footer-bottom-right">
                    <div class="footer-icon"><a href="/social"></a></div>
                    <div class="footer-contactus">
                        <p>歡迎追蹤我們</p>
                        <div class="footer-social-icons"><a target="_blank" href="https://www.facebook.com/uninn.social" id="footer-fb"></a> <a target="_blank" href="https://lin.ee/c3wwJDN" id="footer-line"></a> <a target="_blank" href="https://www.instagram.com/uninn.social/" id="footer-ig"></a></div>
                        <p class="footer-bn-hour">營業時間：平日09：00-18：00，國定假日休假</p>
                        <p class="footer-bn-hour">合作洽談：service@uninn.com.tw</p>
                    </div>
                    <div class="gototop"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <circle cx="24" cy="24" r="23" fill="white" stroke="#3DC4C4" stroke-width="2" />
                                <path d="M13.7139 28.5716L23.9172 19.4287L34.2852 28.5716" stroke="#3DC4C4" stroke-width="4" />
                            </g>
                        </svg></div>
                </div>
                <p>Copyright © 2022 雲時代數位有限公司.All Rights Reserved.｜Designed by <a href="https://www.lohaslife.cc/" target="_blank">LOHAS IT</a></p>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="https://unpkg.com/external-svg-loader@1.3.1/svg-loader.min.js" async></script>
    <script defer="defer" src="https://www.uninn.com.tw/themes/uninn/assets/js/main.js"></script>
    <script defer="defer" src="https://www.uninn.com.tw/themes/uninn/assets/js/global.js"></script>

</body>

</html>
