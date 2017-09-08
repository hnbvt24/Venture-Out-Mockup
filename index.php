<? require_once("connect_to_DB.php"); //inserts contents of this file here ?>
<?php include 'header.php'; ?>
	  		<div class="row">
	  			<div class="col-sm-12 text-center intro-text">
	  				<h1>WELCOME</h1>
	  			</div>
	  		</div>
	  		<div class="row text-center">
	  			<div class="col-sm-12">
	  				<h3>Planning An Outdoor Adventure? Book A Trip With Venture Out</h3>
	  			</div>
	  		</div>
	  		<form class="row intro-form" data-toggle="validator" action="trips-and-programs.php" method="GET">
	  			<div class="col-sm-4 col-sm-offset-1">
	  				<input type="text" name="query" class="form-control" placeholder="Description (i.e. Hiking, Camping)">
	  			</div>
	  			<div class="col-sm-3">	
		  			<div class="input-group">
		  				<input type="date" name="startDate" class="form-control" placeholder="Begin Date" data-error="Please enter in a start date" required><span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
		  			</div>
		  		</div>
		  		<div class="col-sm-3">	
		  			<div class="input-group">
		  				<input type="date" name="endDate" class="form-control" placeholder="End Date" data-error="Please enter in an end date" required><span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
		  			</div>
		  		</div>
		  		<div class="col-sm-2 col-sm-offset-5 padding-btn">
			  		<input type="submit" value="Search" class="btn btn-default btn-lg btn-block">
			  	</div>
			  	<?php 
				  if(isset($_GET['submit'])){ 
				  //do  something here in code 
				  }
				?> 
		  	</form>

	  	</div>
	  	<div class="row location">
	  		<h2 class="text-center">WHERE WE ARE</h2>
	  		<div class="col-sm-6">
	  			<img alt="map" src="images/map.png">
	  		</div>
	  		<div class="col-sm-6">
	  			<p>You can find us right off of Roanoke Street across from
	  				the Architecture Annex Building. Our hours and form of 
	  				contact are listed below:
	  			</p>
	  			<div class="buffer">
		  			<p>Hours:</p>
		  			<p>Monday - Friday // 12pm - 6pm</p>
	  			</div>
	  			<div class="buffer"
		  			<p>Contact:</p>
		  			<a href="tel:#">540-231-4982</a>
		  		</div>
		  		<div class="buffer">
		  			<p>Location:</p>
		  			<address>
					  1234 Example Street<br>
					  Antartica, Example 0987<br>
					</address>
				</div>
	  		</div>
	  	</div>
	  	<div class="row more">
	  		<div class="col-sm-6">
	  			<h3>WHAT TRIPS ARE OFFERED?</h3>
	  				<p>
	  					From horseback riding to rock climbing, 
						we've got something for you! See a full list 
						on our <a href="trips-and-programs.php">Trips and Programs page</a>.
	  				</p>
	  			<h3>WANT TO RENT EQUIPMENT?</h3>
	  				<p>
	  					See a full list of equipment on our 
						<a href="rental-information.php">Rental Rates page</a>. Read all about our rental policies <a href="#">here</a>.
	  				</p>
	  		</div>
	  		<div class="col-sm-6 gallery">
	  			<h3>PHOTO GALLERY</h3>
	  			<a href="gallery.php"><img alt="Gallery Link Image" src="images/gallery.png"></a>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
  <!-- Minified JS Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>