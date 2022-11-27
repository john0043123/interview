<header class="site_header">
        <div class="site_header-container">
            <div id="header-desk">
                <h1><a href="/">Uninn 雲時代</a></h1>
                <nav>
                    <ul>

                        <li><a href="/social">出租小編</a></li>
                        <li><a href="#">服務項目</a><ul><li><a href="/service/branding-design">品牌形象</a></li><li><a href="/service/graphic-design">平面設計</a></li><li><a href="/service/advertise">數位廣告</a></li><li><a href="/service/web-design">網頁設計</a></li><li><a href="/service/consultancy-service">顧問服務</a></li><li><a href="/service/customized">客製化包月服務</a></li></ul></li>
                        <li><a href="/portfolios">作品案例</a></li>
                        <li><a href="/about">聯絡我們</a></li>
                        <li><a href="/posts">數位聚落</a></li>
                        <li><a href="#">{{ __('menu.locale') }}</a>
                            <ul>
                            @foreach(config('portfolio.supportedLanguage') as $k => $name)
                                <li><a href="/set-locale/{{ $k }}">{{ $name }} @if(app()->getLocale() == $k)<i class="fa fa-check"></i>@endif</a></li>
                            @endforeach
                                
                            </ul>
                        </li>

                        <li class="header-form-switch" data-switch="false"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.7416 16.4267L15.0415 12.7273C14.8745 12.5603 14.6481 12.4675 14.4106 12.4675H13.8057C14.83 11.1577 15.4386 9.5102 15.4386 7.718C15.4386 3.45455 11.9835 0 7.71931 0C3.45514 0 0 3.45455 0 7.718C0 11.9814 3.45514 15.436 7.71931 15.436C9.51183 15.436 11.1596 14.8275 12.4697 13.8033V14.4082C12.4697 14.6456 12.5624 14.872 12.7294 15.039L16.4295 18.7384C16.7784 19.0872 17.3425 19.0872 17.6876 18.7384L18.7379 17.6883C19.0867 17.3395 19.0867 16.7755 18.7416 16.4267ZM7.71931 12.4675C5.09549 12.4675 2.96897 10.3451 2.96897 7.718C2.96897 5.09462 5.09178 2.96846 7.71931 2.96846C10.3431 2.96846 12.4697 5.09091 12.4697 7.718C12.4697 10.3414 10.3469 12.4675 7.71931 12.4675Z" fill="black" />
                            </svg></li>
                    </ul>
                </nav>

                <form action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">        <input type="search" value=""  name="q" id="header-search" placeholder="搜尋...">
                </form>
            </div>

            <div id="header-mobile">
                <h1><a href="/">Uninn 雲時代</a></h1>
                <div class="hember"><button class="header-form-switch" data-switch="false"><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.66 21.6141L19.7915 16.7464C19.5717 16.5267 19.2739 16.4046 18.9613 16.4046H18.1654C19.5131 14.6812 20.314 12.5134 20.314 10.1553C20.314 4.54545 15.7678 0 10.157 0C4.54623 0 0 4.54545 0 10.1553C0 15.7651 4.54623 20.3105 10.157 20.3105C12.5156 20.3105 14.6837 19.5098 16.4075 18.1623V18.9581C16.4075 19.2706 16.5295 19.5684 16.7493 19.7881L21.6178 24.6558C22.0768 25.1147 22.8191 25.1147 23.2732 24.6558L24.6551 23.2741C25.1141 22.8152 25.1141 22.073 24.66 21.6141ZM10.157 16.4046C6.70459 16.4046 3.90654 13.612 3.90654 10.1553C3.90654 6.70345 6.69971 3.90587 10.157 3.90587C13.6094 3.90587 16.4075 6.69856 16.4075 10.1553C16.4075 13.6071 13.6143 16.4046 10.157 16.4046Z" fill="#247BA0" />
                        </svg></button>
                    <form action=""><input type="search" name="header-search" id="header-search" placeholder="搜尋..."></form><button class="header-hember-switch" data-switch="false"><svg width="26" height="22" viewBox="0 0 26 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.928571 4.04082H25.0714C25.5843 4.04082 26 3.63881 26 3.14286V0.897959C26 0.402005 25.5843 0 25.0714 0H0.928571C0.41571 0 0 0.402005 0 0.897959V3.14286C0 3.63881 0.41571 4.04082 0.928571 4.04082ZM0.928571 13.0204H25.0714C25.5843 13.0204 26 12.6184 26 12.1224V9.87755C26 9.3816 25.5843 8.97959 25.0714 8.97959H0.928571C0.41571 8.97959 0 9.3816 0 9.87755V12.1224C0 12.6184 0.41571 13.0204 0.928571 13.0204ZM0.928571 22H25.0714C25.5843 22 26 21.598 26 21.102V18.8571C26 18.3612 25.5843 17.9592 25.0714 17.9592H0.928571C0.41571 17.9592 0 18.3612 0 18.8571V21.102C0 21.598 0.41571 22 0.928571 22Z" fill="#247BA0" />
                        </svg></button>
                    <div class="header-menu">
                        <div class="header-hember-close-area"></div>
                        <nav><button class="header-hember-close_btn"><svg width="15" height="24" viewBox="0 0 15 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6022 12.9327L3.60198 23.6136C3.07146 24.1288 2.21134 24.1288 1.68087 23.6136L0.397881 22.3679C-0.131739 21.8536 -0.132758 21.0202 0.395618 20.5047L9.11345 12L0.395618 3.49529C-0.132758 2.97983 -0.131739 2.14637 0.397881 1.63211L1.68087 0.38635C2.2114 -0.128783 3.07151 -0.128783 3.60198 0.38635L14.6021 11.0673C15.1326 11.5824 15.1326 12.4176 14.6022 12.9327Z" fill="#247BA0" />
                                </svg></button>
                            <ul>
                                <li><a href="/social">出租小編</a></li>
                                <li><li class="nav-have-child">服務項目<svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.46634 0.185661L11.8068 5.31905C12.0644 5.56663 12.0644 5.96802 11.8068 6.21557L11.1839 6.8143C10.9268
																																														                                        7.06145 10.5101 7.06193 10.2524 6.81535L5.99999 2.74706L1.74765 6.81538C1.48991 7.06195 1.07318 7.06148 0.816057
																																														                                        6.81432L0.193175 6.21559C-0.0643917 5.96802 -0.0643917 5.56663 0.193175 5.31908L5.53366 0.185687C5.7912 -0.0618915
																																														                                        6.20878 -0.0618913 6.46634 0.185661Z" fill="#232536" />
                                    </svg><ul><li><a href="/service/branding-design">品牌形象</a></li><li><a href="/service/graphic-design">平面設計</a></li><li><a href="/service/advertise">數位廣告</a></li><li><a href="/service/web-design">網頁設計</a></li><li><a href="/service/consultancy-service">顧問服務</a></li><li><a href="/service/customized">客製化包月服務</a></li></ul></li></li>
                                <li><a href="/portfolios">作品案例</a></li>
                                <li><a href="/about">聯絡我們</a></li>
                                <li><a href="/posts">數位聚落</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>        </div>
    </header>