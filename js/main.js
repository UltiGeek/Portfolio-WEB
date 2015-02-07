$(function(){
	// Stars and Bottom Clouds
	$('.stars').pan({fps: 30, speed: 0.7, dir: 'left', depth: 30});
	$('.bottom-clouds').pan({fps: 30, speed: 0.5, dir: 'left', depth: 30});
	
	// Rocket Animation
	$(".rocket").animate({
		left: "60%",
		top:'8%',
		width: '246px',
		height: '674px'
	}, 4000);
	
	// Smoke Animation
	$(".smoke").animate({
		left: "52%",
		top:'60%'
	}, 4000);
	
	// Comming Soon Animation 
	$("#comming_soon_text").delay(4000).animate({
		top:'50%'
	}, 1000);
	
	// Text box animation
	$("#text_box").delay(5000).fadeIn(1000);
	
});