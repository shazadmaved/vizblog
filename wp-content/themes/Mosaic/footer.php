	</div>
	<!-- end #content -->
</div>
<!-- end #mainWrapper -->
<!-- begin footer -->
<footer>
    <!-- footer_bottom_wrapper -->
<div id='footer_bottom_wrapper'>
<!-- footer_bottom -->
<div class="block clearfix">
  <!-- begin #copyright -->
        <div id="copyright">
             <!-- begin copyright -->
             <!-- begin copyright -->
					<?php if(of_get_option('footer_copyright') == '') { ?>
					Copyright &copy; <?php echo date("Y"); ?> All Rights Reserved</a>.
					<?php } else { ?>
					<?php echo of_get_option('footer_copyright')  ?>
					<?php } ?>
					<!-- end copyright --> 
	
        <?php 
            // All links in the footer should remain intact, until you buy links free theme. 
            // Warning! Your site will stop working if these links are edited or deleted  
            
            ?>
     <div id="info"><br>Created by <a href="http://besttheme.net/">besttheme</a>. Sponsored by <a href="http://www.ultimatehostingreview.com">cheap hosting</a> // <a href="http://bhardwaja.com">Bhardwaja</a></div>
  
</div>
     
     </div>
</div>
</footer>
 <?php
	 wp_footer();
?>
</body>
</html>