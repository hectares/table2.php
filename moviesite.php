<?php
session_start();
//check to see if user has logged in with a valid pasword
if ($_SESSION['authuser'] !=1)
{  
	echo 'Sorry, but you don\'t have permission to view this page!';
	exit();
}
?>	
<html>
<head>
<title>My Movie Site - 
<?php 
if (isset($_GET['favmovie']))
{
	echo '-';
	echo $_GET['favmovie'];
}
?>
</title>
</head>
<body>
<?php include 'header.php'; ?>
<?php
$favmovies = array('Life of Brian','Stripes','Office Space','The Holy Grail',
					'Matrix','Terminator 2','Star Trek IV',
					'Close Encounter Of the Third Kind',
					'Sixteen Candles','Caddyshack');
/*delete these lines
function listmovies_1()
{
	echo '1. Life of Brian<br/>';
	echo '2. Stripes<br/>';
	echo '3. Office Space<br/>';
	echo '4. The Holy Grail<br/>';
	echo '5. Matrix<br/>';
}
function listmovies_2()
{
	echo '6. Terminator 2<br/>';
	echo '7. Star Trek IV<br/>';
	echo '8. Close Encounter Of the Third Kind<br/>';
	echo '9. Sixteen Candles<br/>';
	echo '10. Caddyshack<br/>';
}
end of deleted lines*/
if (isset($_GET['favmovie']))
{
echo 'Welcome to our site, ';
//echo $_COOKIE['username'];
echo $_SESSION['username'];
echo '! <br/>';
// deleted : define ('FAVMOVIE', 'The Life of Brian');
echo 'My favorite movie is ';
echo $_GET['favmovie'];
echo '<br/>';
$movierate = 5;
echo 'My movie rating for this movie is: ';
echo $movierate;
}
else
{  
	echo 'My top ' . $_POST['num'] . ' favoirte movies ';
	
	if (isset($_POST['sorted']))
	{
	sort($favmovies);
	echo ' (sorted alphabetically) ';
	}
	echo 'are:<br/>';
	/*echo '<ol>';
	foreach ($favmovies as $movie)
	{
	 echo '<li>';
	 echo $movie;
	 echo '</li>';
	}
	echo '</ol>';*/
	$numlist = 0;
	echo '<ol>';
	while ($numlist < $_POST['num'])
		{
		 echo '<li>';
		 echo $favmovies[$numlist];
		 echo '</li>';
		 $numlist = $numlist + 1;
	 }
	 echo '</ol>';
}
?>
</body>
</html>
