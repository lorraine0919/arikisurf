$(function(){
	var controller = new ScrollMagic.Controller();
	for (var i = 1; i < 5; i++) {
		var expolde = new ScrollMagic.Scene({
			triggerElement:"#explodetrigger",
			offset:'100px'
		})
		.setClassToggle('.boardlayer','explode')
		// .addIndicators({name:'對應點'})
		.addTo(controller)
	};

	$('.boardlayer').mouseover(function(){
		console.log($(this).index());
		var index = $(this).index();
		document.getElementsByClassName("aboutContent")[index].style.opacity=1;
		document.getElementsByClassName("path")[index].style.animation='dash 2s linear alternate forwards';
	}).mouseleave(function(){
		var index = $(this).index();
		document.getElementsByClassName("aboutContent")[index].style.opacity=0;
		document.getElementsByClassName("path")[index].style.strokeDashoffset=1000;
	});
});