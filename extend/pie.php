<footer class="page-footer  grey darken-4">
    <div class="container">
    	<div class="row">
        	<div class="col l6 s12">
          		<h5 class="white-text"><?php echo $title_menu; ?></h5>
          		<p class="grey-text text-lighten-4"><?php echo $descripcion?></p>
          	</div>
        </div>
    </div>	
    <div class="footer-copyright grey darken-3">
      <div class="container">
      @ <a class="white-text text-lighten-3" href="index.php">Alberto Alonso</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
    <!--Import jQuery before materialize.js-->  
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>

    $(document).ready(function() {

      $('select').material_select();
      
      $(".button-collapse").sideNav();

      // Open
      $('.collapsible').collapsible('open', 0);
      // Close
      $('.collapsible').collapsible('close', 0);
      // Destroy
      $('.collapsible').collapsible('destroy');     
    
      // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();
      $('#modal1').modal('open');
      $('#modal1').modal('close');

     

      $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
      });

      $('.dropdown-button').dropdown('open');
      $('.dropdown-button').dropdown('close')

    });
  </script>

 </body>
</html>