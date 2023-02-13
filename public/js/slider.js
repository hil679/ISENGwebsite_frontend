'use strict'

new Swiper('.representative-product .swiper-container', {
  autoplay: { // 자동 재생 여부
    delay: 4000 // 5초마다 슬라이드 바뀜
  },
  loop: true, // 반복 재생 여부
  slidesPerView: 3, // 한 번에 보여줄 슬라이드 개수
  spaceBetween: 10, // 슬라이드 사이 여백
  centeredSlides: true, // 1번 슬라이드가 가운데 보이기
  pagination: { // 페이지 번호 사용 여부
    el: '.representative-product .swiper-pagination', // 페이지 번호 요소 선택자
    clickable: true // 사용자의 페이지 번호 요소 제어 가능 여부
  },
  pagination : { // 페이징 설정 -> 고쳐야함!!
		el : '.swiper-pagination',
		clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
	},
  navigation: { // 슬라이드 이전/다음 버튼 사용 여부
    prevEl: '.representative-product .swiper-prev', // 이전 버튼 선택자
    nextEl: '.representative-product .swiper-next' // 다음 버튼 선택자
  }
})

/**
 * Promotion 슬라이드 토글 기능
 */
// // 슬라이드 영역 요소 검색!
// const promotionEl = document.querySelector('.promotion')
// // 슬라이드 영역 숨김 여부 기본값!
// let isHidePromotion = false
// // 토글 버튼을 클릭하면,
// promotionToggleBtn.addEventListener('click', function () {
//   // 슬라이드 영역 숨김 여부를 반댓값으로 할당!
//   isHidePromotion = !isHidePromotion
//   // 요소를 숨겨야 하면,
//   if (isHidePromotion) {
//     promotionEl.classList.add('hide')
//   // 요소가 보여야 하면,
//   } else {
//     promotionEl.classList.remove('hide')
//   }
// })