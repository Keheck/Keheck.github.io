<?php
$password = '';
if ( isset($_GET['q']) )
{
  $password = $_GET['q'];
}

$score = 0;
$score = strlen($passwort);

if (preg_match("/[a-z]/", $passwort))
	{
    $score = $score + 5;
}
if (preg_match("/[A-Z]/", $passwort))
	{
    $score = $score + 5;
}
if (preg_match("/[0-9]/", $passwort)) 
{
    $score = $score + 5;
}
if (preg_match("/[,.-;:_]/", $passwort)) 
{
    $score = $score + 5;
}
if ($score <= 18 ) 
{
    echo 'not safe ('.$score.' points)';
}
elseif ($score <= 25) 
{
    echo 'safe ('.$score.' points)';
}
elseif ($score > 25) 
{
    echo 'very safe ('.$score.' points)';
}
?>