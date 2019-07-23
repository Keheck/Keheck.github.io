<?php
$pw = "";
if(isset($_GET['q']))
{
	$pw = $_GET['q'];
}
$pwscore = strlen($pw);
if(preg_match("/[a-z/", $pw))
{
	$pwscore += 5;
}
if(preg_match("/[A-Z]/", $pw))
{
	$pwscore += 5;
}
if(preg_match("/[0-9]/", $pw))
{
	$pwscore += 5;
}
if(preg_match("/[,.-;:_]/", $passwort))
{
	$pwscore += 5;
}

if($pwscore <= 18)
{
	echo 'unsicher';
}
elseif ($pwscore <= 25) 
{
    echo 'sicher';
}
elseif ($pwscore > 25) 
{
    echo 'sehr sicher';
}
?>