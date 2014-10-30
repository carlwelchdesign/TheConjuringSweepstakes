<?
 $host     =   'db3.mysql.wb.com';
$mysqli = new mysqli($host, 'yourhaunted', 'unCehkUt', 'yourhauntedstories');
		
		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		else
		{
			printf('connected :	'.$host);
		}
?>