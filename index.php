<html>
    <head>
        <title>PDO Demo</title>
    </head>
    <body>
        <table = border="1">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
        <table>
		<?php
			$username = 'at358';
			$password = 'Krishna15';
			$hostname = 'sql1.njit.edu';
			$dsn = "mysql:host=$hostname;dbname=$username";

		mysql_connect($dsn, $username, $password) or die("Could not connect: " . mysql_error()); 
		
		$result = mysql_query("SELECT id, email FROM accounts LIMIT 5");

		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    	?>
			<tr>
    			<td><?=$row['id']; ?></td>
    			<td><?=$row['name']; ?></td>
			</tr>    
<?php
}

mysql_free_result($result);
?>
		</table>
    
        
        ?>
    </body>
</html>
