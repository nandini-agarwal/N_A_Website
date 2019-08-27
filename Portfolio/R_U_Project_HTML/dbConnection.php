<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
    <title>Oracle DB Connection</title>
</head>
<body>
    <? php
        echo"php is working<br>\n";
            $connection = oci_connect("APDS","12345678","localhost:1521/PDBORCL");
            If (!$connection)
            {
                echo "<FONT COLOR='FFFFFF'>Failed to connect to Oracle</FONT><br>\n";
            }
            else
            {
                echo "<FONT COLOR='FFFFFF'>Succesfully connected with Oracle DB</FONT><br>\n";  
            }
    ?>
</body>
</html>
    		