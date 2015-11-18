<?php get_header();?>
	<div class="container-fluid">
    <div class="row" style="margin-top:20px;">
			<?php
				for($i=0;$i<6;$i++) {	?>
					<a name="thumbnail" class="thumbnail col-sm-2 col-xs-3" onclick="showImage()" type="button" ondblclick="hideImage()"> 
            <img src="<?php bloginfo('stylesheet_directory'); ?>/plastic.jpg"  onclick="showImage()" ondblclick="hideImage()" class="img-responsive center-block" width="auto" height="220">
							<div class="caption">
								<h4>Kamera Obrotowa <?php echo $i+1?><br />
					</h4>
							</div>
            	</a>      				
				<?php }?>
      <div id="Camera" style=";">
      </div>
     
</div>
<?php wp_footer();?>
</body>
</html>
<script type="text/javascript">
  		
  function showImage(){
    		var id = document.getElementById('Camera');
    var img = "<img src='<?php bloginfo('stylesheet_directory'); ?>/plastic.jpg'\
								class='img-responsive center-block col-md-8' >\
								<ul style ='margin-top:4%;margin-left:30px;'> \
								<li class='btn '><span class='glyphicon glyphicon-chevron-left'> </span> W lewo</li>\
								<li class='btn '>W prawo <span class='glyphicon glyphicon-chevron-right'> </span></li>\
								</ul>\
								<ul style ='margin-top:4%;' > \
								<li class='btn '><span class='glyphicon glyphicon-plus'> </span> Powiększ</li>\
								<li class='btn '>Pomniejsz <span class='glyphicon glyphicon-minus'> </span></li>\
								</ul>";
    		
				id.innerHTML = img;
    		
    		id.style.display = "block";
    		document.getElementByName("thumbnail").style.backgroundColor ="#F41230";
   		
      	
      }
  function hideImage(){
    	var id = document.getElementById('Camera');
    	id.style.display = "none";
  }
  
</script>


