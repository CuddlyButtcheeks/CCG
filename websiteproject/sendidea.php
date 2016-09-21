<?php
if(isset($_POST['sumbit']))
{
	$to = "cuddlybuttcheeks@gmail.com,theonlyfuryan@gmail.com";
	$from = "ccg.noreply@gmail.com";
	$subject = "Idea Submission";
	$topic = $_POST['topic'];
	$idea = $_POST['idea'];
	$integrate = $_POST['integrate'];
	$message = "Topic: ".$topic."\nIdea: ".$idea."\nIdea Integration: ".$integrate
	mail($to, $subject, $message);	
}
?>