(function ($) {

	jQuery(document).ready(function ($) {
		$(".desp").hover(
			function () {
				$(".back-desp").stop().slideDown();
			},
			function () {
				$(".back-desp").stop().slideUp();
			}
		);
		$(".b_estudiante").on("click",function(){
			$(".modal-co").slideDown();
			$(".estudiante").slideDown();
		});
		$(".b_docente").on("click",function(){
			$(".modal-co").slideDown();
			$(".docente").slideDown();
		});
		$(".close").on("click",function(){
			$(".modal-co").slideUp();
			$(".estudiante").slideUp();
			$(".docente").slideUp();
		});
		// $('.desp').on('mouseover', function(){
		// 	$('.back-desp').slideToggle();
		// });
		$(".span-menuM").on("click", function () {

			$(".menuM").stop().slideDown();
			$(".span-menuM").attr("style", "display:none !important;");
			$(".span-menuM-Close").attr("style", "display:block !important;");
		});
		$(".span-menuM-Close").on("click", function () {

			$(".menuM").stop().slideUp();
			$(".span-menuM").attr("style", "display:block !important;");
			$(".span-menuM-Close").attr("style", "display:none !important;");
		});
		$('.sliderRelacionados').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 890,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]

		});

	});

})(jQuery);