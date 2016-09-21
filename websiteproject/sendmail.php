<?php
if(isset($_POST['sumbit']))
{
	$to = "cuddlybuttcheeks@gmail.com,theonlyfuryan@gmail.com";
	$from = "clan.application@gmail.com";
	$subject = "Application";
	$ingame = $_POST['ingame'];
	$gamelist = array(); 
	for each($_POST['ingame'])
	{
		$gamelist2 = array($_POST['ingame']);
		if($_POST['ingame'] == "Other, specify")
			$gamelist2 = array($_POST['othergame']);
		$gamelist = array_merge($gamelist,$gamelist2);
	}
	$time = $_POST['hours'];
	$age = $_POST['age'];
	$discord = $_POST['dis'];
	$mic = $_POST['mic'];
	$steamID = $_POST['steamid'];
	$how = $_POST['how'];
	$memID = $_POST['memID'];
	$type = $_POST['type'];
	$message = "Ingame Name: ".$ingame."\nList of Games: ".$gamelist."\nWeekly Hours: ".$time."\nApplicant Age: ".$age."\nDiscord Accessibility: ".$discord."\nMic: ".$mic."\nSteam ID: ".$steamID."\nHow they heard about us: ".$how."\nReferred Member ID: ".$memID."\nType of gamer: ".$type;
	mail($to, $subject, $message);	
}
?>