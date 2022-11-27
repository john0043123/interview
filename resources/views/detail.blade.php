
<!DOCTYPE html>
<html lang="zh-TW">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#231815">
    <meta name="apple-mobile-web-app-status-bar-style" content="#231815">
    <meta name="description" content="">
    <meta name="keywords" content="廣告,廣告成效,小編,社群,行銷,粉絲團經營,FB經營,社群行銷,行銷企劃,粉專,網路行銷,數位廣告,品牌經營,品牌營銷,機器人,粉絲團機器人,內容行銷,網紅行銷,KOL,KOC,受眾,消費者輪廓,轉換率,點擊率,銷售,粉絲團爆文,銷售型文案,廣告代操,廣告公司,廣告投放,出租小編,設計外包,費用,客製化專案,網頁設計,品牌形象,電商,facebook,instagram,包裝設計">
    <meta property="og:type" content="website">
    <meta property="og:title" content="保健食品｜包裝設計 - Uninn 雲時代">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://www.uninn.com.tw/storage/images/portfolio/bao_jhuang/保健食品｜包裝設計 (1).jpg">
    <meta property="og:url" content="https://www.uninn.com.tw/portfolio/038457">




    <meta name="robots" content="index,follow" />


    <link rel="shortcut icon" href="https://www.uninn.com.tw/storage/images/resources/favicon.svg">
    <title>保健食品｜包裝設計 | Uninn 雲時代</title>
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


    <div class="page_main page-portfolio portfolio-single">
        <section class="page_section portfolio-single-wrapper">
            <div class="page_section-inner">
                <div class="page_section-content">
                    <div class="portfolio-single-hd">
                        <div class="img">
                            <div class="img_elm">
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('admin')->url($portfolio->images[0]->path) }}" alt="{{$portfolio->images[0]->path}}">
                            </div><!-- /.img_elm -->
                        </div><!-- /.img -->
                        <div class="intro"><a href="/" class="link-goback">返回</a>
                            <div class="name">{{ $portfolio->detail->name }}｜{{ $portfolio->detail->type }}</div>
                            <div class="cnt">
                                <div class="cnt-col">
                                    <div class="title">作品類型</div>
                                    <div class="txt">
                                        {{ $portfolio->detail->type }}<br>
                                    </div>
                                </div>
                                <div class="cnt-col">
                                    <div class="title">作品年分</div>
                                    <div class="txt">{{ $portfolio->detail->year }}</div>
                                </div>
                                <div class="cnt-col">
                                    <div class="title">分類項目</div>
                                    <div class="txt">
                                        {{ __('portfolio.' . $portfolio->detail->category) }}<br>
                                    </div>
                                </div>
                            </div><!-- /.cnt -->
                            <div class="btns"><a href="" class="main-btn">查看網站</a></div><!-- /.btns -->
                        </div><!-- /.intro -->
                    </div><!-- /.portfolio-single-hd -->
                    <div class="portfolio-single-bd">
                        <div class="portfolio-single-bd-inner">
                            <div class="htmleditor">
                                @foreach($portfolio->images as $i)
                                <p style="text-align: center;">
                                    <img alt="" src="{{ \Illuminate\Support\Facades\Storage::disk('admin')->url($i->path) }}" style="width: 900px; height: 675px;" />
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
        </section><!-- /.page_section portfolio-single-wrapper -->
        <div class="page_section portfolio-single-other">
            <div class="page_section-inner">
                <div class="page_section-content">
                    <h3 class="title">精選案例</h3>
                    <ul class="profolio_list">
                        <li class="profolio_item"><a href="/portfolio/041866" class="profolio_item-link"><span class="img_elm"><img src="https://www.uninn.com.tw/storage/images/portfolio/bao_jhuang/咖啡品牌｜產品標籤設計.jpg" alt="/images/portfolio/bao_jhuang/咖啡品牌｜產品標籤設計.jpg"> </span><span class="profolio_item-content"><span class="name">咖啡品牌｜產品標籤設計</span> <span class="category">平面設計</span></span></a></li><!-- /.profolio_item -->
                        <li class="profolio_item"><a href="/portfolio/001068" class="profolio_item-link"><span class="img_elm"><img src="https://www.uninn.com.tw/storage/images/portfolio/bao_jhuang/洗面乳品牌｜軟管包裝設計 (1).jpg" alt="/images/portfolio/bao_jhuang/洗面乳品牌｜軟管包裝設計 (1).jpg"> </span><span class="profolio_item-content"><span class="name">洗面乳品牌｜軟管包裝設計</span> <span class="category">平面設計</span></span></a></li><!-- /.profolio_item -->
                        <li class="profolio_item"><a href="/portfolio/026215" class="profolio_item-link"><span class="img_elm"><img src="https://www.uninn.com.tw/storage/images/portfolio/bao_jhuang/政府單位｜DVD包裝設計 (1).jpg" alt="/images/portfolio/bao_jhuang/政府單位｜DVD包裝設計 (1).jpg"> </span><span class="profolio_item-content"><span class="name">政府單位｜DVD包裝設計</span> <span class="category">平面設計</span></span></a></li><!-- /.profolio_item -->
                    </ul>
                </div>
            </div>
        </div><!-- /.page_section portfolio-single-other -->
    </div><!-- /.page_main END  !! -->

    <script defer="defer" src="https://www.uninn.com.tw/themes/uninn/assets/js/portfolio-single.js"></script>

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
