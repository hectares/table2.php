<?php
$db = mysqli_connect('localhost', 'bp6am', 'bp6ampass', 'moviesite') or 
		die ('Unable to connect. Click your connection parameters.');
mysqli_select_db($db, 'moviesite');

//select the movie titles and their genre after 1990
$query = 'SELECT
		movie_name, movie_type
	FROM
		movie
	WHERE
		movie_year > 1990
	ORDER BY
		movie_type';
$result = mysqli_query($db, $query);

//show the results
while ($row = mysqli_fetch_array($result))
	{
		foreach($row as $value)
		{
		echo $value . ' ';
		}
		echo '<br/>';	
	}
?>
		
