<?
 $host     =   'theatrical.mysql.wb.com';
$mysqli = new mysqli($host, 'fbsweeps', 'PifAwDdA', 'fbsweeps');
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