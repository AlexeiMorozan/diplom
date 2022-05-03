$(function(){
 	$("#leftPanelName").css("line-height","50px");

 	$('.menuUser label').click(function(){
 		enableActiveBlock(".usersContent");

 		disableActiveBlock(".productsContent");
 		disableActiveBlock(".managersContent");
 		disableActiveBlock(".usersInfoContent");
 		disableActiveBlock(".productsInfoContent");
 		disableActiveBlock(".managersInfoContent");
 		disableActiveBlock(".logsContent");
 	});
 	$('.menuProduct label').click(function(){
 		enableActiveBlock(".productsContent");

 		disableActiveBlock(".usersContent");
 		disableActiveBlock(".managersContent");
 		disableActiveBlock(".usersInfoContent");
 		disableActiveBlock(".productsInfoContent");
 		disableActiveBlock(".managersInfoContent");
 		disableActiveBlock(".logsContent");
 	});
 	$('.menuManager label').click(function(){
 		enableActiveBlock(".managersContent");

		disableActiveBlock(".usersContent");
 		disableActiveBlock(".productsContent");
 		disableActiveBlock(".usersInfoContent");
 		disableActiveBlock(".productsInfoContent");
 		disableActiveBlock(".managersInfoContent");
 		disableActiveBlock(".logsContent");
 	});
 	$('.tableUser label').click(function(){
 		enableActiveBlock(".usersInfoContent");

		disableActiveBlock(".usersContent");
 		disableActiveBlock(".productsContent");
 		disableActiveBlock(".managersContent");
 		disableActiveBlock(".productsInfoContent");
 		disableActiveBlock(".managersInfoContent");
 		disableActiveBlock(".logsContent");
 	});
 	$('.tableProduct label').click(function(){
 		enableActiveBlock(".productsInfoContent");

		disableActiveBlock(".usersContent");
 		disableActiveBlock(".productsContent");
 		disableActiveBlock(".managersContent");
 		disableActiveBlock(".usersInfoContent");
 		disableActiveBlock(".managersInfoContent");
 		disableActiveBlock(".logsContent");
 	});
 	$('.tableManager label').click(function(){
 		enableActiveBlock(".managersInfoContent");

		disableActiveBlock(".usersContent");
 		disableActiveBlock(".productsContent");
 		disableActiveBlock(".managersContent");
 		disableActiveBlock(".usersInfoContent");
 		disableActiveBlock(".productsInfoContent");
 		disableActiveBlock(".logsContent");
 	});
 	$('.logs label').click(function(){
 		enableActiveBlock(".logsContent");

		disableActiveBlock(".usersContent");
 		disableActiveBlock(".productsContent");
 		disableActiveBlock(".managersContent");
 		disableActiveBlock(".usersInfoContent");
 		disableActiveBlock(".productsInfoContent");
 		disableActiveBlock(".managersInfoContent");
 	});
 });

 function disableActiveBlock(className){
 	$(className).addClass("dispNone");
 	$(className).removeClass("activeContentBlock");
 }
 function enableActiveBlock(className){
 	$(className).addClass("activeContentBlock");
 	$(className).removeClass("dispNone");
 }