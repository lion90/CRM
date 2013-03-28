/*css("background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')")
"background","url('localhost:81/probando/CRM/CodeIgniter/style/imagenes/12.png')"*/
$(document).ready(function () 


{
  $('.op1Over2').mouseover(function()
  {
  	$(this).css("width","178").css("border-radius","4px").css("border","1px solid");
  })

  .mouseout(function()
  {
    $(this).css("width", "170px");
  });

  $('#accordion a.item').click(function () 
  {
			$('#accordion li').children('ul').slideUp('fast');
			$('#accordion a.item').each(function () 
			{
				if ($(this).attr('rel')!='') 
				{
					$(this).removeClass($(this).attr('rel') + 'Over');	
				}
			});

			$('#accordion .s').mouseover(function()
				{
					$(this).css("background-color","#BADCE9").css("color","black").css("width","142px").css("border-radius","0px").css("height","auto");

				})
			
			.mouseout(function()
			{
    			$(this).css("background-color","white");
  			});
		
			$(this).siblings('ul').slideDown('fast');
			$(this).addClass($(this).attr('rel') + 'Over');			
			
			return false;

		});
	
});
