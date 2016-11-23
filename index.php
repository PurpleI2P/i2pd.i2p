<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta http-equiv="cache-control" content="max-age=3600">
	<meta http-equiv="cache-control" content="private">
	<meta http-equiv="expires" content="3600">
	<meta name="description" content="Welcome to I2P">
	<title>Welcome to I2P</title>
	<link rel="shortcut icon" href="favicon.ico">
</head>

<body text="#FFFFFF" bgcolor="#800080">
	<table border="0" width="100%" cellspacing="0" cellpadding="0" height="100%">
		<tr>
			<td align=center>
				<img src="img/mask.png"><br/>
				<font face="Arial" size="6">Your I2Pd Browser is working correctly</font><br/>
				<font face="Arial" size="7">Welcome to Invisible Internet</font>
				<br/><br/><br/><br/>
				<font face="Arial" size="4">Visits: 
					<?php
						$f=fopen("stat.dat","a+");
						flock($f,LOCK_EX);
						$count=fread($f,100);
						if (!isset($_COOKIE['i2pdvis'])){
							@$count++;
							ftruncate($f,0);
							fwrite($f,$count);
							fflush($f);
							setcookie("i2pdvis", "true", time() + 1*3600, "/");
						}
						flock($f,LOCK_UN);
						fclose($f);
						echo $count; 
					?>
				</font>
			</td>
		</tr>
	</table>
</body>
</html>