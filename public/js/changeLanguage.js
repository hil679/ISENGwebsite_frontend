// const isKorean = navigator.language === "ko-KR";
// // if (isKorean) {
// //     document
// //       .getElementById("language_select")
// //       .options[1].setAttribute("selected", true);
// //   }
// //   else {
// //     document
// //       .getElementById("language_select")
// //       .options[0].setAttribute("selected", true);
// //   }
// i18next.init({
//     lng: isKorean ? "ko" : "en", // 기본 언어 설정
//     debug: true, // 디버그 모드 설정 (필요에 따라 변경 가능)
//     resources: {
//         ko:{
//             translation: {
//                 headTitle:{
//                     title:"인성이엔지(주)"
//                 },
//                 content:{
//                     aboutTitle:"회 사 소 개",
//                     productsTitle:"제 품 소 개",
//                     machine:"장 비 현 황",
//                     message:{
//                         text1:"은 고객의 지원과 헌신에 중점을 둔 맞춤형, 양질의 서비스를 제공하고 있습니다.", 
//                         text2:"납기는 물론, 합리적인 가격 및 고객의 요구 사항을 충족함으로써 신뢰할 수 있는 서비스를 제공합니다.",
//                         satisfied:"고객의 만족도",
//                         precision: "정밀부품",
//                         custom: "맞춤제작<br>서비스"
//                     }
//                 },
//                 customersFirm:{
//                     ckd: "CKD(주)",
//                     ihara:"IHARA(주)",
//                     mp:"MIKI_PULLEY(주)",
//                     bio:"BIOSYSTECH(주)"
//                 },
//                 contactBar:{
//                     tel:"031-682-7077",
//                     fex:"031-682-7078",
//                     postcode:"우) 17796",
//                     address1stLine:"경기도 평택시 청북읍",
//                     address2ndLine:"드림산단3로 13"
//                 }
//             }
//         },

//         en:{
//             translation: {
//                 headTitle:{
//                     title:"INSUNG ENG Co., Inc."
//                 },
//                 content:{
//                     aboutTitle:"About", //About Us or Compane Overview
//                     machine:"Machines",
//                     productsTitle:"Products",
                    
//                     message:{
//                         text1:" stand out for customized, quality service, <br>with an emphasis on customer support and commitment.", 
//                         text2: "Every customer is served promptly and can rely on highly skilled <br>and dedicated personnel to meet deadlines, machining standards, and requirements",
//                         satisfied:"Satisfaction",
//                         precision: "Precision",
//                         custom: "Customized<br>Services"
//                     }

//                 },
//                 customersFirm:{
//                     ckd: "CKD Co. Ltd.",
//                     ihara:"IHARA Science Corporation",
//                     mp:"MIKI PULLEY Co.",
//                     bio:"BIOSYSTECH Co. Ltd."
//                 },
//                 contactBar:{
//                     tel:"82-31-682-7077",
//                     fex:"82-31-682-7078",
//                     postcode:"Korea 17796",
//                     address1stLine:"13, Dreamsandan 3-Ro",
//                     address2ndLine:"<br>Cheongbuk-yeop, Pyoungtak-Si, Kyounggi-Do"
//                 }
//             }
//         }
//     }
// },function(err, t) {
//     // 초기화 후 실행할 코드
//     if (err) return console.error('Error initializing i18next:', err);
//     // updateContent()
// });


function changeLanguage(lang) {

        // 언어 변경이 완료된 후에 업데이트 수행
        var opLang;
        var aboutUrl = (lang === 'en') ? 'http://ise-k.com/en/about' : 'http://ise-k.com/kr/about';
        var productsUrl = (lang === 'en') ? 'http://ise-k.com/en/products' : 'http://ise-k.com/kr/products';
        var machineUrl = (lang === 'en') ? 'http://ise-k.com/en/machine' : 'http://ise-k.com/kr/machine';
        var contactUrl = (lang === 'en') ? 'http://ise-k.com/en/contact' : 'http://ise-k.com/kr/contact';

        var currentUrl = window.location.href;
        var regex = /([&?])lang=[^&]+/;
        var newUrl;
        console.log(currentUrl)

        if (lang === "ko") {
            newUrl = currentUrl.replace("kr", "en");
            opLang = "en"
            
        } else {
            newUrl = currentUrl.replace("en", "kr");
            opLang = "ko"
        }
    
        // Check if the language code is already present in the URL
        // If not, append it to the URL
        if (!(currentUrl.includes("/kr" ) || currentUrl.includes("/en" ))) {
            if(opLang === "ko"){
                newUrl = newUrl.replace("#", "") + lang;
            }else{
                newUrl = newUrl.replace("#", "") + "kr";
            }
        }

        
        document.querySelector('html').setAttribute('lang', opLang);
        document.querySelector('ul.navbar__menu li:nth-child(1) a').href = aboutUrl;
        document.querySelector('ul.navbar__menu li:nth-child(2) a').href = productsUrl;
        document.querySelector('ul.navbar__menu li:nth-child(3) a').href = machineUrl;
        document.querySelector('ul.navbar__menu li:nth-child(4) a').href = contactUrl;
        // document.querySelector('.lang_btn').textContent = (opLang === 'en') ? '한 국 어' : 'ENGLISH';

        

        // 페이지 이동
        window.location.href = newUrl;

        
}

