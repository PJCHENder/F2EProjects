
// menu

$(document).ready(function(){

	/*********************/
	//	電腦版導覽列
	/*********************/
	
	$(".menu-menu01").mouseover(function(){
		$(".jsMenu:eq(0)").css({"display":"block"})
		$(".jsMenu:not(:eq(0))").css({"display":"none"})
	})
	$(".menu-menu02").mouseover(function(){
		$(".jsMenu:eq(1)").css({"display":"block"})
		$(".jsMenu:not(:eq(1))").css({"display":"none"})
	})
	$(".menu-menu03").mouseover(function(){
		$(".jsMenu:eq(2)").css({"display":"block"})
		$(".jsMenu:not(:eq(2))").css({"display":"none"})
	})
	$(".menu-menu04").mouseover(function(){
		$(".jsMenu:eq(3)").css({"display":"block"})
		$(".jsMenu:not(:eq(3))").css({"display":"none"})
	})
	$(".menu-menu05").mouseover(function(){
		$(".jsMenu:eq(4)").css({"display":"block"})
		$(".jsMenu:not(:eq(4))").css({"display":"none"})
	})
	
	$(".jsMenu").mouseleave(function(){
		$(".jsMenu").css({"display":"none"});
	})

	/*********************/
	//	手機版導覽列
	/*********************/
	var open = 0;
	$(".hamburger").click(function(){
		$(".mobile_menu").animate({"left":"0"})
		setTimeout(function(){open = 1},1000);
	})

	$("div:not(.mobile_menu)").click(function(){
		if(open == 1){
			$(".mobile_menu").animate({"left":"-300px"});
			open = 0;
		}
	})

	$(".more_item").click(function(){
		$(".submenu").slideToggle();
		$(this).toggleClass('active');
	})

	/*WORKing HERE*/
	/*
	$(".more_item:not ul").click(function(){
		$(".submenu").slideToggle();
		$(this).toggleClass('active');
	})
	*/
});