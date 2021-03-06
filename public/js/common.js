var owl = $(".carousel");
owl.owlCarousel({
	
	items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,2], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

});
owl.on("mousewheel", ".owl-wrapper", function(e){
		if(e.delayY > 0)
			owl.trigger("owl.prev")
		else
			owl.trigger("owl.next")	
		e.preventDefault();
});

$(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
