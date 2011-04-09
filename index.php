<!DOCTYPE html>
<html>
 	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>greenishSlides</title>
		<link rel="stylesheet" type="text/css" href="design.css">
		<script type="text/javascript" src="jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="jquery.greenishSlides-1.0.0-beta.js"></script>

<!--		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://jmar777.googlecode.com/svn/trunk/js/jquery.easing.1.3.js"></script>-->
		<script type="text/javascript" src="jquery-ui-1.8.11.custom.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<!--		<script type="text/javascript" src="jquery.jswipe-0.1.2.js"></script>-->
		<script type="text/javascript">
			(function($) {
				$(document).ready(function() { 
 					$(".greenishSlides").greenishSlides({	
 						stayOpen:true,
 						keyEvents:true,
 						circle:true,
 						handle:".handle",
 						activeClass:"mySuperActiveClass",
 						active:false,
 						easing:"easeInOutQuad",
 						events:{
 							activate:"mouseover",
 							deactivate:"mouseout"
 						},
 						transitionSpeed:600,
 						vertical:false,
 						limits: {
 							min:0
 						},
 						active:1,
 						cache:true,
				 		hoer: {
				 			mouseover:function () {
				 				if($(this).hasClass("active")) return;
				 				var limits= {}
				 				limits[$(this).index()] = {min:40};
 								$.gS.options=$.gS.setOpts({limits:limits});
								$.gS.update($(this).parent(),{transitionSpeed:1000});
							},
				 			mouseout:function () {
				 				if($(this).hasClass("active")) return;
								$.gS.update($(this).parent());
				 			}
				 		},
						hooks: {
 							preActivate: function () {
 								var slide=$(this);
									ai=slide.index()
									width=(40/0.7)+1;
									limits = {};

								for(var i=0; i<=slide.siblings().length; i++) {
									width=width*0.7-1;
									if(width<1) width=0;
									width=Math.ceil(width);
									if((ai-i) >=0) limits[ai-i]={min:width};
									if((ai+i) <= slide.siblings().length)limits[ai+i]={min:width};
								}
 					 			slide.parent().queue("gSpreAnimation", function (next) {
									var slides=$(this).children(),
										slide;
									for(var k=0; k<slides.length; k++) {
										slide=slides.eq(k)
										if(slide.hasClass("mySuperActiveClass")) var color="#FFFFFF";
										else {
											var colors=["#EEEEEE","#DDDDDD","#CCCCCC","#BBBBBB","#AAAAAA","#999999","#888888","#777777","#666666","#555555","#444444","#333333","#222222","#111111"];
											var i=slide.parent().find(".mySuperActiveClass").index();
											i<slide.index() ? i=slide.index()-i :i-=slide.index();
											var color=colors[i] || "#444444";
										}							
										slide.animate({backgroundColor:color},{queue:false});
									}
			
									next();									 
								});
 								$.gS.emptyCache(slide.parent());
 								$.gS.opts=$.gS.setOpts(slide.parent(),{limits:limits});
 								return true;
 							}
 						}	
 					});
					
					$(window).resize(function () {
//						$.gS.update($(".greenishSlides"));
					});
				});
			})(jQuery);
		</script>		
	</head>
	<body>
		<ul class="greenishSlides" id="greenishSlides">
			<li class="one handle"><img src="http://placehold.it/500x300"></li>
			<li class="two handle"><img src="http://placekitten.com/200/300"></li>
			<li class="three handle"><img src="http://placehold.it/500x300"></li>
			<li class="four handle"><img src="http://placekitten.com/200/300"></li>
			<li class="two"><img class="handle" src="http://placekitten.com/200/300"><img class="handle" src="http://placekitten.com/200/300"></li>
			<li class="three handle"><img src="http://placehold.it/500x300"></li>
			<li class="four handle"><img src="http://placekitten.com/200/300"></li>
			<li class="two handle"><img src="http://placekitten.com/200/300"></li>
			<li class="one handle"><img src="http://placehold.it/500x300"></li>
			<li class="two handle"><img src="http://placekitten.com/200/300"></li>
			<li class="three handle"><img src="http://placehold.it/500x300"></li>
			<li class="four handle"><img src="http://placekitten.com/200/300"></li>
			<li class="two"><img class="handle" src="http://placekitten.com/200/300"><img class="handle" src="http://placekitten.com/200/300"></li>
			<li class="three handle"><img src="http://placehold.it/500x300"></li>
			<li class="four handle"><img src="http://placekitten.com/200/300"></li>
			<li class="two handle"><img src="http://placekitten.com/200/300"></li>
			<li class="two"><img class="handle" src="http://placekitten.com/200/300"><img class="handle" src="http://placekitten.com/200/300"></li>
			<li class="three handle"><img src="http://placehold.it/500x300"></li>
			<li class="four handle"><img src="http://placekitten.com/200/300"></li>
			<li class="two handle"><img src="http://placekitten.com/200/300"></li>
		</ul>
	</body>
</html>
