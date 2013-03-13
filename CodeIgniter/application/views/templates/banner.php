<script type="text/javascript">
    
    
 $(document).ready(function() {
	// ############################################################################## Block B code - START
	
	var height = $('#blockB a').height();// get the height of the first image in block B
	var timeout = 0;

	
	function nextA() {
	clearTimeout(timeout);
		
$('#blockB').css({bottom: 0});// set style bottom:0px to div with id = blockB 
		$('#blockB').animate({bottom: -height}, 600);// make image move 73 px to the bottom with animated effect for 600 ms
		$('#blockB a:last-child').prependTo('#blockB');// take the last image and add  the top in the save div i.e id= blockB
     // ############################################################################# Block B code - END 
	 
	  // ######################################################################################## Block A code - START
	$myclone = $('#blockB a:last-child').clone();
	
	var image_manipulation = $myclone.html() ; // contains something like : <img src="banners/xmenfirstclass_small.jpg" alt="" class="min"  />

	$big_image  = image_manipulation.replace(/_small/, '');
	// we now remove the text "_small" from the image src to make it like :  <img src="banners/xmenfirstclass.jpg" alt="" class="min"  />
 // we did this because we need to point it to the larger image 
	$('#blockA a').html($big_image);// insert the larger image in our Block A
	$('#blockA img').removeClass("min").addClass("max");//remove the class 'min' associated with image and insert class max.
	//E.g  <img src="banners/xmenfirstclass.jpg" alt="" class="max"  />
	$('#blockA img').css({opacity: 0}) // Make the image invisible by adding a css style opacity:0.
	//We did that because we want to make the larger image fade in.
    .animate({opacity: 1}, 600);//Put back the opacity to 1 in 600 Millisecond => Produce a face in effect
	
	
		  //#################################################################################### Block A code - END
		timeout = setTimeout(function() { // call the function nextA() repeatedly evey 5000 ms
			nextA();
		}, 5000);
	}
	
	// mouse  events
	$('#block-itunes') 
		.mouseenter(function() {//When user hover cursor on banner
			$('#bi-button').stop().animate({opacity: 1});//add the "Arrow" button
		})
		.mouseleave(function() {//When user move cursor away 
			$('#bi-button').stop().animate({opacity: 0});//Remove the "Arrow" button
		});
	$('#bi-button')
		.css({opacity: 0})
		.bind('keydown mousedown', function(){
			$(this).addClass('btn-down');//give the impression button is pressing 
		})
		.bind('keyup blur mouseup mouseleave', function(){
			$(this).removeClass('btn-down');//give the impression button is being released
		})
		.click(function() {//When user clicks the "Arrow" button
			nextA(); // make the image 'rotate' through the list
		});
	

	nextA();// call function nextA() => This is where it starts ! :)
});
    </script>
    
<div id="block-itunes">
	<div id="blockA"><!-- Block A for large image-->
     <a href="#largeimage">
      <!-- large Image is added here -->
     </a>
      </div>
		<div id="itune_images">
                    
			<div id="blockB"> <!-- Block B for small Images-->
				<a href="#image1">
					<img src="<?php echo base_url(); ?>style/imgs/img1large.jpg" alt="" class="min"  />
				</a>
				<a href="#image2">
	                <img src="<?php echo base_url(); ?>style/imgs/img2large.jpg"  alt="" class="min"  />
				</a>
				<a href="#image3">
				    <img src="<?php echo base_url(); ?>style/imgs/img3large.jpg"  alt="" class="min" />
				</a>
				<a href="#image4">
	                <img src="<?php echo base_url(); ?>style/imgs/img4large.jpg"  alt="" class="min"  />
				</a>
			</div>
		</div>
		<button type="button" id="bi-button"></button>
	</div>
