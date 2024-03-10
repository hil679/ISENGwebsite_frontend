<?php
    $language = isset($_GET['lang']) ? $_GET['lang'] : 'ko';
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="headTitle">인성이엔지(주)</title>
    <link rel="stylesheet" href="http://www.ise-k.com/public/css/main.css">
    <link rel="stylesheet" href="http://www.ise-k.com/public/css/common.css">
    <link rel="stylesheet" href="http://www.ise-k.com/public/css/contact_footer.css">
    <!--swiper-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/i18next@19.8.4/dist/umd/i18next.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script src="http://www.ise-k.com/public/js/main.js" defer></script> <!--태그의 defer 속성은 페이지가 모두 로드된 후에 해당 외부 스크립트가 실행됨-->
    <script src="http://www.ise-k.com/public/js/slider.js" defer></script>
    <script src="http://www.ise-k.com/public/js/sliderArrow.js" defer></script>
    <script src="http://www.ise-k.com/public/js/changeLanguage.js" defer></script>
    <!-- <script src="public/js/changeLangData.js" defer></script> -->
    
</head>
<body>
     <nav class="navbar">
        <div class="navbar__logo">
            <a href="/">
                <img src = "asset/main/ISElogo.png" alt = "logo"  class = img_logo/>
                <span class = "company-nm">인성이엔지&#40;주&#41;</span>
            </a> 
        </div>
        <?php
            $language = isset($_GET['lang']) ? $_GET['lang'] : 'ko';
            $aboutUrl = ($language === 'en') ? 'http://www.ise-k.com/en/about' : 'http://www.ise-k.com/kr/about';
            $productsUrl = ($language === 'en') ? 'http://www.ise-k.com/en/products' : 'http://www.ise-k.com/kr/products';
            $machineUrl = ($language === 'en') ? 'http://www.ise-k.com/en/machine' : 'http://www.ise-k.com/kr/machine';
            $contactUrl = ($language === 'en') ? 'http://www.ise-k.com/en/contact' : 'http://www.ise-k.com/kr/contact';
        ?>
        <ul class="navbar__menu">
            <li><a href="http://www.ise-k.com/kr">홈</a></li> 
            <li><a href="<?php echo $aboutUrl; ?>"><?php echo ($language === 'en') ? 'About Us' : '회사 소개'; ?></a></li>
            <li><a href="<?php echo $productsUrl; ?>"><?php echo ($language === 'en') ? 'Products' : '제품'; ?></a></li>
            <li><a href="<?php echo $machineUrl; ?>"><?php echo ($language === 'en') ? 'Machines' : '설비'; ?></a></li>
            <li><a href="<?php echo $contactUrl; ?>"><?php echo ($language === 'en') ? 'Contact' : '회사 위치'; ?></a></li>
        </ul>
        <button class = "lang_btn" onclick="changeLanguage('<?php echo ($language === 'en') ? 'ko' : 'en'; ?>');">
                <?php echo ($language === 'en') ? '한 국 어' : 'ENGLISH'; ?>
        </button>

        <a href="#" class="navbar__toogleBtn">
            <img src = "asset/main/toggle.png" alt = "logo" width="26px" height="26px" class = toogle/>
        </a>

    </nav>
    
    <div id = "content">
        <div class="main-slider">
            <div class = "mainSliderBackground">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img id = "firm-outside" src="asset/main/ISEC.jpeg"/>
                            <div class = "motto">
                                 <div id = "motto-ko" class = "motto-ko">생각이 변해야 미래가 바뀐다</div> 
                                 <!-- 스스로 변하지 않으면 미래는 없다 -->
                                 <span class = "motto-line"></span> 
                                 <div id = "motto-en" class = "motto-en">Change Mind, Change Future</div> 
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo $aboutUrl; ?>">
                                <img src="asset/main/ISEC-inside.png" />
                                <div class = "text">
                                    <div id = "aboutNm" class = "name">회 사 소 개</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="<?php echo $productsUrl; ?>">
                                <img src="asset/main/product.png"/>
                                <div class = "text-industry">
                                    <div id = "productNm" class = "name">제 품 소 개</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href=<?php echo $machineUrl; ?>>
                                <img src="asset/main/machine.png"/>
                                <div class = "text">
                                    <div id = "machineNm" class = "name">장 비 현 황</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-pagination"></div>  
            <div class="swiper-prev">
                <span class="material-icons"><img src = "asset/main/prev.png"/></span>
            </div>
            <div class="swiper-next">
                <span class="material-icons"><img src = "asset/main/next.png"/></span>
            </div>
        </div>

        <div class="message">
            
            <div class = "message_title_div">
                <span class = "message_title">MESSAGE</span>
            </div>
            <div class="message_img">
                <span id = "satisfied" class = "satisfied">고객의 만족도</span>
                <span id = "precision" class = "precision">정밀부품</span>
                <img src = "asset/main/message.png"/>
                <span id = "custom" class = "custom">맞춤제작<br>서비스</span>
                <p>
                    <b class = "company-nm">인성이엔지(주)</b><span id = "message1">은 고객의 지원과 헌신에 중점을 둔 맞춤형, 양질의 서비스를 제공하고 있습니다.</span><br><br>
                    <span id = "message2">납기는 물론, 합리적인 가격 및 고객의 요구 사항을 충족함으로써 신뢰할 수 있는 서비스를 제공합니다.</span><br>
                </p>
            </div>
        </div>
    </div>
    <div id = "customers-firm">
        <div class = "customers_firm_div">
            <span class = "customers_firm_title">CUSTOMERS</span>
        </div>
        <ul style="list-style: none;">
            <li>
                <div class = "first_office">
                    <img src="asset/customers/CKD.png" alt="CKD(주)">
                </div>
            </li>
            <li>
                <div class = "second_office">
                    <img src="asset/customers/IHARA.png" alt="IHARA(주)">
                </div>
            </li>
            <li>
                <div class = "third_office">
                    <img src="asset/customers/MIKI_PULLEY.png" alt="MIKI_PULLEY(주)">
                </div>
            </li>
            <li>
                <div class = "forth_office">
                    <img src="asset/customers/BST.png" alt="BIOSYSTECH(주)">
                </div>
            </li>
        </ul>  
    </div>   
    <div id = "contact_bar">
        <ul style="list-style: none;">
            <li>
                <div class = "office_contect">
                    <img src="asset/main/tel.png" alt="call">
                    <b>TELEPHONE</b>
                    <p>
                        <span>TEL</span>: <span id="tel">031-682-7077</span><br>
                        <span>FAX</span>: <span id="fax">031-682-7078</span><br>
                    </p>
                </div>
            </li>
            <li>
                <div class = "email">
                    <b>EMAIL</b>
                    <img src="asset/main/email.png" alt="email">
                    <p>
                        yesise@ise-k.com
                    </p>
                </div>
            </li>
            <li>
                <div class = "logo_location">
                    <img src="asset/main/location.png" alt="email">
                    <b>LOCATION</b>
                    <p>
                        <span id="post">우) 17796</span><br>
                        <span id="location1">경기도 평택시 청북읍</span><br class = "location-hidden"> <span id="location2">드림산단3로 13</span><br>
                        <!-- <br class = "location-hidden"> 
                        인성 이엔지(주) -->
                    </p>
                </div>
            </li>
        </ul>  
    </div>
    <div class = "copyright">
        <span>Copyright &copy; <span class = "company-nm">인성이엔지(주)</span> All Rights Reserved.</span>
    </div> 
</body>
</html>

