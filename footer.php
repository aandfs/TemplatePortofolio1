    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script type="text/javascript">
$(document).on("scroll", function(){
		if
      ($(document).scrollTop()>(screen.height*0.25)){
        $(".sticky-menu").css("transform","translateY(0%)");
		}
		else
		{
			$(".sticky-menu").css("transform","translateY(-100%)");
    }
    

	});

  $(document).ready(function() {
    $('.popup-img').magnificPopup({
    type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
});});


new WOW().init();


function myFunction(x) {
  if (x.matches) { // If media query matches
    var a = document.querySelector('a[href="https://web.whatsapp.com/send?phone=+6281279699123&text=saya%20ingin%20konsultasi%20tentang"]');
    if (a) {
      a.setAttribute('href', 'https://wa.me/6281279699123?text=saya%20ingin%20konsultasi%20tentang')
    }

  } else {
    var a = document.querySelector('a[href="https://wa.me/6281279699123?text=saya%20ingin%20konsultasi%20tentang');
    if (a) {
      a.setAttribute('href', 'https://web.whatsapp.com/send?phone=+6281279699123&text=saya%20ingin%20konsultasi%20tentang')
    }
  }
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes 


$('.page-scroll').on('click', function(e){
  var tujuan = $(this).attr('href');
  var elemenTujuan = $(tujuan);
  
  $('html, body').animate({
    scrollTop: elemenTujuan.offset().top-50
  }, 800, 'easeOutExpo');

  e.preventDefault();
  });

</script>


  </body>
</html>