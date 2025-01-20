<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="headTitle">INSUNG ENG Co., Inc.</title>
    <link rel="stylesheet" href="../public/css/main.css">
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
    
</head>
<body>
     <nav class="navbar">
        <div class="navbar__logo">
            <a href="http://www.ise-k.com/en">
                <img src = "http://www.ise-k.com/asset/main/ISElogo.png" alt = "logo"  class = img_logo/>
                <span class = "company-nm">INSUNG ENG Co., Inc.</span>
            </a> 
        </div>
        <ul class="navbar__menu">
            <li><a href="http://www.ise-k.com/en">Home</a></li>   
            <li><a href="http://www.ise-k.com/en/about">About Us</a></li>
            <li><a href="http://www.ise-k.com/en/products">Products</a></li>
            <li><a href="http://www.ise-k.com/en/machine">Machines</a></li>
            <li><a href="http://www.ise-k.com/en/contact">Contact</a></li>
        </ul>

        <a href="#" class="navbar__toogleBtn">
            <img src = "http://www.ise-k.com/asset/main/toggle.png" alt = "logo" width="26px" height="26px" class = toogle/>
        </a>
        
        <div class="lang_btn">
            <ul style="list-style: none;">
                <li class="middle">
                    <button class = "ko" onclick="changeLanguage('en');">
                        한 국 어 
                    </button>
                </li>
                <li class="middle-divider"></li>
                <li class="last">
                    <button class = "en" onclick="changeLanguage('ko');">
                        ENGLISH
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    
    <div id = "content">
        <div class="main-slider">
            <div class = "mainSliderBackground">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img id = "firm-outside" src="http://www.ise-k.com/asset/main/ISEC.jpeg"/>
                            <div class = "motto">
                                 <div id = "motto-en" class = "motto-en">Change Mind, Change Future</div> 
                                 <span class = "motto-line"></span> 
                                 <div id = "motto-ko" class = "motto-ko">생각이 변해야 미래가 바뀐다</div> 
                                 
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.ise-k.com/en/about">
                                <img src="http://www.ise-k.com/asset/main/ISEC-inside.png" />
                                <div class = "text">
                                    <div id = "aboutNm" class = "name">About Us</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.ise-k.com/en/products">
                                <img src="http://www.ise-k.com/asset/main/product.png"/>
                                <div class = "text-industry">
                                    <div id = "productNm" class = "name">Products</div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://www.ise-k.com/en/machine">
                                <img src="http://www.ise-k.com/asset/main/machine.png"/>
                                <div class = "text">
                                    <div id = "machineNm" class = "name">Machines</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="swiper-pagination"></div>  
            <div class="swiper-prev">
                <span class="material-icons"><img src = "http://www.ise-k.com/asset/main/prev.png"/></span>
            </div>
            <div class="swiper-next">
                <span class="material-icons"><img src = "http://www.ise-k.com/asset/main/next.png"/></span>
            </div>
        </div>

        <div class="message">
            
            <div class = "message_title_div">
                <span class = "message_title">MESSAGE</span>
            </div>
            <div class="message_img">
                <span id = "satisfied" class = "satisfied">Satisfaction</span>
                <span id = "precision" class = "precision">Precision</span>
                <img src = "http://www.ise-k.com/asset/main/message.png"/>
                <span id = "custom" class = "custom">Customized<br>Services</span>
                <p>
                    <b class = "company-nm">INSUNG ENG Co., Inc.</b><span id = "message1"> stands out for customized, quality service, <br>with an emphasis on customer support and commitment.</span><br><br>
                    <span id = "message2">Every customer is served promptly and can rely on highly skilled <br>and dedicated personnel to meet deadlines, machining standards, and requirements.</span><br>
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
                    <img src="http://www.ise-k.com/asset/customers/CKD.png" alt="CKD Co. Ltd.">
                </div>
            </li>
            <li>
                <div class = "second_office">
                    <img src="http://www.ise-k.com/asset/customers/IHARA.png" alt="IHARA Science Corporation">
                </div>
            </li>
            <li>
                <div class = "third_office">
                    <img src="http://www.ise-k.com/asset/customers/MIKI_PULLEY.png" alt="MIKI PULLEY Co.">
                </div>
            </li>
            <li>
                <div class = "forth_office">
                    <img src="http://www.ise-k.com/asset/customers/BST.png" alt="BIOSYSTECH Co. Ltd.">
                </div>
            </li>
        </ul>  
    </div>   
    <div id = "contact_bar">
        <ul style="list-style: none;">
            <li>
                <div class = "office_contect">
                    <img src="http://www.ise-k.com/asset/main/tel.png" alt="call">
                    <b>TELEPHONE</b>
                    <p>
                        <span>TEL</span>: <span id="tel">82-31-682-7077</span><br>
                        <span>FAX</span>: <span id="fax">82-31-682-7078</span><br>
                    </p>
                </div>
            </li>
            <li>
                <div class = "email">
                    <b>EMAIL</b>
                    <img src="http://www.ise-k.com/asset/main/email.png" alt="email">
                    <p>
                        yesise@ise-k.com
                    </p>
                </div>
            </li>
            <li>
                <div class = "logo_location">
                    <img src="http://www.ise-k.com/asset/main/location.png" alt="email">
                    <b>LOCATION</b>
                    <p>
                        <span id="location1">13, Dreamsandan 3-Ro,</span> <span id="location2"><br>Cheongbuk-yeop, Pyoungtak-Si, Kyounggi-Do,</span><br>
                        <span id="post">Korea 17796</span><br>
                        <!-- <br class = "location-hidden"> 
                        인성 이엔지(주) -->
                    </p>
                </div>
            </li>
        </ul>  
    </div>
    <div class = "copyright">
        <span>Copyright &copy; <span class = "company-nm">INSUNG ENG Co., Inc.</span> All Rights Reserved.</span>
    </div> 
</body>
</html>

