/*css("background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')")
"background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')"*/
$(document).ready(function () 


{
  
				//cache nav
				var nav = $("#menu");
				
				//add indicator and hovers to submenu parents
				nav.find("li").each(function() {
					if ($(this).find("ul").length > 0) {
						$("<span>").text("^").appendTo($(this).children(":first"));

						//show subnav on hover
						$(this).mouseenter(function() {
							$(this).find("ul").stop(true, true).slideDown();
						});
						
						//hide submenus on exit
						$(this).mouseleave(function() {
							$(this).find("ul").stop(true, true).slideUp();
						});
					}
				});
			
});
