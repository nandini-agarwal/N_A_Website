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
		<style>
    		table{
    		    border : 3px solid white;
		        background-color: #FFC;
		        font-size: 15px;
        		width:100%;
        		color:white;
      		}
		    th{
        		border-bottom: 5px solid #000;
    		}
    		td{
        		border-bottom: 2px solid #666;
    		}
    	</style>
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
		<h1  class="page-title">IPAS Index Growth Data</h1>
		<!--Print Button-->
		<p class="print>
      		<a href="#" onclick="window.print();return false;"><button id="print" name="print"><img class = "imgPrint" src="Images/printer.jpg"></button></a>
    	</p>
		
		<?php
			echo"php is working<br>\n";
            $connection = oci_connect("APDS","12345678","localhost:1521/PDBORCL");
            If (!$connection)
            {
                echo "Failed to connect to Oracle<br>\n";
            }
            else
            {
                echo "Succesfully connected with Oracle DB<br>\n";  
            }

    		$SD = $_GET['i_g_start'];
			$ED = $_GET['i_g_end'];
			echo "$SD AS Start Date $ED AS End Date<br>\n";

			
			
    		/* $sqlget = 'SELECT * FROM ORCL_RESOURCE_UTILISATION WHERE DATE_ID > SD AND DATE_ID < ED'; */
			$stid = oci_parse($connection, "SELECT * FROM RESOURCE_UTILISATION_DATA WHERE CURR_DATE BETWEEN TO_DATE('$SD','YYYY-MM-DD') AND TO_DATE('$ED','YYYY-MM-DD')");

			/* The defines MUST be done before executing */
			/*
			oci_define_by_name($stid, 'CPU_USAGE', $CPU_USAGE);
			oci_define_by_name($stid, 'DISK_USAGE', $DISK_USAGE);
			oci_define_by_name($stid, 'MEMORY_USAGE', $MEMORY_USAGE);
			oci_define_by_name($stid, 'LOAD_UASAGE', $LOAD_USAGE);
			oci_define_by_name($stid, 'DATE_ID', $DATE_ID);
			*/

			oci_execute($stid);
			echo "<table border='10' class=\"table\" style='text-align:center'>\n";
				echo"<thead>\n";
					echo"<tr>\n";
						echo"	<th><FONT COLOR='000000'>H1</FONT></th>";
						echo"	<th><FONT COLOR='000000'>H2</FONT></th>";
						echo"	<th><FONT COLOR='000000'>H3</FONT></th>";
						echo"	<th><FONT COLOR='000000'>H4</FONT></th>";
						echo"	<th><FONT COLOR='000000'>H5</FONT></th>";
						echo"	<th><FONT COLOR='000000'>H6</FONT></th>";
					echo"</tr>\n";
				echo"</thead>\n";
				echo"<tbody>\n";
				while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS))
				{
    				echo "<tr>\n";
	 	   			foreach ($row as $item)
    				{
    	    			echo "	<td><FONT COLOR='000000'>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</FONT></td>\n";
    				}
    				echo "</tr>\n";
				}
				echo"</tbody>\n";
			echo "</table>\n";
			echo "$row rows fetched<br>\n";
		?>
	</div>
		
    <!-- Back Button -->
		<div class= center>
        	<a href = "displayGrowth.php"><button id="back" name="back" class="button_1 button">Back</button></a>
        </div>
    </section>
    <!--Footer--> 
    <footer>
      <p>Databases CRIS, Copyright &copy;2019</p>
    </footer>

	</body>
</html>