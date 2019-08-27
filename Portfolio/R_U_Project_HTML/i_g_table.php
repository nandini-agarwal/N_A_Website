<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<meta name="description" content="IPAS Database Growth"> 
		<meta name="keywords" content="Index Growth, TableSpace Growth and Table Growth">
		<meta name="author" content="Nandini Agarwal, Yukti Khurana">
		<title> IPAS | Index Growth Data </title>
		<link rel="stylesheet" href="./CSS/style.css">
	</head>
	<body>
    <!--Header-->
		<header>
      <div class="container_branding">
        <div id = "branding">
            <a href = "index.php"><img class = "Logo" src="Images/Logo.jpg"  width="100" height="60" align="left" ></a>
          <h1 align="center">Integrated Payroll Accounting System <span class="highlight"> Databases</span></h1>
        </div>
        <nav>
          <ul>
             <li><a href="index.php">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="services.php">Services</a></li>     
          </ul>
        </nav>
      </div>
    </header>

    <!--Content-->
    <section class="content">
		  <div class="container">
      	<h1 class="page-title">Display Index Growth Records Datewise</h1>
      	<form class="form-horizontal2" id="r_u_form" action="display_i_g_table.php" method='get'><!--php link-->
      		<legend>
      			<!--Start Date Input-->
      			<div class="form-group">
      				<label for="start" width="200px">Start Date</label>
              <input type="date" id="i_g_start" name="i_g_start" min="2010-01-01" max="2025-12-31">
      		  	<p></p>
              <!--End Date Input-->
			     		<label for="end" width="200px">End Date</label>
      				<input type="date" id="i_g_end" name="i_g_end" min="2010-01-01" max="2025-12-31">
        			<p></p>
      		  	<!-- Index Growth Button -->
				      <label for="indexGrowth">Show Data</label>
        			<p></p>
              <a href="display_i_g_table.php"><button type="submit" id="i_g_table" name="i_g_table" class="button_1 button">Submit</button></a><!--php link-->
          	</div>
        	</legend>
      		<p></p>
      	</form>
      </div>
      <!-- Back Button -->
      <br>
  		<div class= center>
       	<a href = "index.php"><button id="back" name="back" class="button_1 button">Back</button></a>
      </div>
    </section>
     
    <!--Footer--> 
    <footer>
      <p>Databases CRIS, Copyright &copy;2019</p>
    </footer>

	</body>
</html>