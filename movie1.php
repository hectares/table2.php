<?php
//setcookie('username', 'Joe', time() + 60*60);
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

//check username and password information
if (($_SESSION['username'] == 'Joe') and 
	($_SESSION['userpass'] == '12345'))
	{
		$_SESSION['authuser'] = 1;
	}
	else
	{
		echo 'Sorry, but you don,t have permission to view this page!';
		exit();
	}
//$_SESSION['username'] = 'Joe12345';
//$_SESSION['authuser'] = 1;
?>
<html>
<head>
<title>Find my Favoirte Movie!</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php
$myfavmovie = urlencode('Life of Brian');
echo "<a href=\"moviesite.php?favmovie=$myfavmovie\">";
echo 'Click here to see information about my favorite movie!';
echo '</a>';
?>
<br/>
<!--delete these lines
<a href="moviesite.php?movienum=5">Click here to see my top 5 movies.</a>
<br/>
<a href="moviesite.php?movienum=10">Click here to see my top 10 movies.</a>

<a href="moviesite.php">Click here to see my 10 movies.</a>
<br/>
<a href="moviesite.php?sorted=true">Click here to see my top 10 movies sorted alphabetically.</a>
end of deleted lines-->
<br/>
Or choose how many movies you would like to see:
<br/>
<form method="post" action="moviesite.php">
<p>Enter number of movies (up to 10):
<input type="text" name="num" maxlength="2" sixe="2"/>
<br/>
Check to sort them alphabetically:
<input type="checkbox" name="sorted"/>
</p>
<input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>
