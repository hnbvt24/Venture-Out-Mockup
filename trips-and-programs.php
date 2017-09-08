<? require_once("connect_to_DB.php"); //inserts contents of this file here ?>

<?php include 'header.php'; ?>
	  		<div class="row">
	  			<div class="col-sm-12 text-center intro-text">
	  				<h1>Trips &amp; Programs</h1>
	  			</div>
	  		</div>
	  		<div class="row text-center">
	  			<div class="col-sm-12">
	  				<h3>When is the last time you tried something for the first time?</h3>
	  			</div>
	  		</div>
	  		<div class="row text-center">
	  			<div class="col-sm-12">
	  				<h2>Available Trips:</h2>
  					 <?php

  					 	connectDB();

  					 	if(isset($_GET['query'])) {

  					 	// DO THIS IF SUBMITED FORM ON HOME PAGE

							$query = $_GET['query'];
							$startDate = $_GET['startDate'];
							$endDate = $_GET['endDate']; 
							// gets value sent over search form

					        $nquery = htmlspecialchars($query);
					        // changes characters used in html to their equivalents, for example: < to &gt;

					        $newquery = mysqli_real_escape_string($db, $nquery);
					        // makes sure nobody uses SQL injection

					        $sql = "SELECT * 
					        		FROM trips 
					        		WHERE trip_date >='" . $startDate . "' AND trip_date <='" . $endDate . "' 
					        		 AND program LIKE '%" . $newquery . "%'";

					        $result = mysqli_query($db, $sql) or die("SQL error: " . mysqli_error());


					 		 if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
								// $row = mysqli_fetch_array($result) puts data from database into array, while it's valid it does the loop     
								echo "<table class='table table-hover'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>Trip Date</th>";
											echo "<th>Program</th>";
											echo "<th>Cost</th>";
											echo "<th>Register By</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";

									while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
										// posts results gotten from database(title and text) you can also show id ($row['id'])
								 		echo "<tr>";
								 			echo "<td>" . $row[1] . "</td>";
								 			echo "<td>" . $row[2] . "</td>";
								 			echo "<td>" . $row[3] . "</td>";
								 			echo "<td>" . $row[4] . "</td>";
								 		echo "</tr>";
							    	}
							    	echo "</tbody>";
						    	echo "</table>";
						    } else {
						    	echo "<h4>There are no trips with the search name <i>" . $newquery . "</i> between <i>" . $startDate . "</i> and <i>" . $endDate . "</i>.</h4>";
						    	echo "<p>Please check our trips below for a list of upcoming trips with Venture Out.</p>";
						    }
						   

						  } else {

						  	$sql = "SELECT * FROM trips"; 
						  	$result = mysqli_query($db, $sql) or die("SQL error: " . mysqli_error());
						  	if(mysqli_num_rows($result) > 0){ 
							  	echo "<table class='table table-hover'>";
									echo "<thead>";
										echo "<tr>";
											echo "<th>Trip Date</th>";
											echo "<th>Program</th>";
											echo "<th>Cost</th>";
											echo "<th>Register By</th>";
										echo "</tr>";
									echo "</thead>";
									echo "<tbody>";
									while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
										// posts results gotten from database(title and text) you can also show id ($row['id'])
								 		echo "<tr>";
								 			echo "<td>" . $row[1] . "</td>";
								 			echo "<td>" . $row[2] . "</td>";
								 			echo "<td>" . $row[3] . "</td>";
								 			echo "<td>" . $row[4] . "</td>";
								 		echo "</tr>";
							    	}
									echo "</tbody>";
							    	echo "</table>";
							    }

						  }

						  /* free result set */
					  		mysqli_free_result($result);
					 	 	mysqli_close($db);

						?>
	  			</div>
	  		</div>
<?php include 'footer.php'; ?>