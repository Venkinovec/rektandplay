 $(document).ready(function (){
     $("#But0").click(function (){
         $('html, body').animate({
             scrollTop: $("#carousel").offset().top
         }, 1000);
         return false;
     });
 });

 $(document).ready(function (){
     $("#But1").click(function (){
         $('html, body').animate({
             scrollTop: $("#novinky").offset().top-80
         }, 1000);
         return false;
     });
 });

 $(document).ready(function (){
    $("#But2").click(function (){
        $('html, body').animate({
             scrollTop: $("#onas").offset().top-80
         }, 1000);
         return false;
     });
 });
 $(document).ready(function (){
     $("#But3").click(function (){
         $('html, body').animate({
             scrollTop: $("#clenove").offset().top-80
         }, 1000);
         return false;
     });
 });

 $(document).ready(function (){
    $("#But4").click(function (){
        $('html, body').animate({
            scrollTop: $("#servery").offset().top-80
        }, 1000);
        return false;
     });
 });

$(document).ready(function (){
    $("#But5").click(function (){
        $('html, body').animate({
            scrollTop: $("#galerie").offset().top-80
        }, 1000);
        return false;
     });
 });

 $(document).ready(function () {
     $('.nav a').click(function(e) {

         $('.nav a').removeClass("aktivni");

         var $this = $(this);
         if (!$this.hasClass('aktivni')) {
             $this.addClass('aktivni');
         }
         //e.preventDefault();
     });
 });

$(function() { 
    Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/themes/classic/galleria.classic.min.js');
    Galleria.run('.galleria');
}());

$(document).ready(function (){
    $(".show-hide").click(function(){
        $(".album").fadeToggle();
        //$("#div2").fadeToggle("slow");
        //$("#div3").fadeToggle(3000);
    });
});

function hidegall(){
    $(".album").hide();
    $(".album1").hide();
    //alert("hidden");
}
$(document).ready(function (){
    $(".show-hide1").click(function(){
        $(".album1").fadeToggle();
        //$("#div2").fadeToggle("slow");
        //$("#div3").fadeToggle(3000);
    });
});

var $contactForm = $('#contact-form');
$contactForm.submit(function(e) {
	e.preventDefault();
	$.ajax({
		url: '//formspree.io/your@email.com',
		method: 'POST',
		data: $(this).serialize(),
		dataType: 'json',
		beforeSend: function() {
			$contactForm.append('<div class="alert alert--loading">Sending message…</div>');
		},
		success: function(data) {
			$contactForm.find('.alert--loading').hide();
			$contactForm.append('<div class="alert alert--success">Message sent!</div>');
		},
		error: function(err) {
			$contactForm.find('.alert--loading').hide();
			$contactForm.append('<div class="alert alert--error">Ops, there was an error.</div>');
		}
	});
});