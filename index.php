<?php require_once 'settings.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $set["site_name"]; ?></title>
		<link rel='stylesheet' href='css/bootstrap.css'> 
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>

	      </button> <a class="navbar-brand" href="#"><?php echo $set["site_name"]; ?></a>

	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <!-- [Menu start] -->
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Home</a></li>
	      </ul>
	      <!-- [Menu end] -->
	    </div>
	  </div>
	</div>


	<div class="container" style="margin-top: 80px">
	  <div class="panel panel-primary">
	    <div class="panel-heading">
	      <h3 class="panel-title">Top <?php echo $set["table_limit"]; ?></h3>
	    </div>
	    <table class="table table-striped table-hover ">
	      <thead>
	        <tr>
	          <th>Player</th>
	          <th>Kills</th>
	          <th>Deaths</th>
              <th>Wins</th>
	        </tr>
	      </thead>
	      <tbody>
			<?php 

				$query = $db->query("SELECT * FROM $set[table] ORDER BY $set[sort] DESC LIMIT 0,".$set["table_limit"], PDO::FETCH_ASSOC);
				if ( $query->rowCount() ){
			     	foreach( $query as $row ){
						$head = ($set["head"] == "1") ? '<img src="https://minotar.net/avatar/'.$row["id"].'/10" class="img-circle">' : null ;
						echo "<tr>";
						echo "<td>".$head." ".$row["id"]."</td>";
                        echo "<td>".$row["kill"]."</td>";
						echo "<td>".$row["death"]."</td>";
						echo "<td>".$row["win"]."</td>";
						echo "</tr>";
			     	}
				}

			?>
	      </tbody>
	    </table>
	  </div>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	</body>
</html>
