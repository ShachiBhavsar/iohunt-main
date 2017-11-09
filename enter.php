<?php
include ('conn_main.php');
session_start();
if (isset($_REQUEST['entr'])) 
{
	$tmnam=$_REQUEST['tm_nm'];
		$stmt = $conn_main->prepare('select * FROM teams WHERE team_nm = ?');
	$stmt->bind_param('s', $tmnam);

	$stmt->execute();

	$res=$stmt->get_result();

	$chk=$res->num_rows;

		if($chk)
		{
			$_SESSION['user']=$tmnam;
			?>
			<script type="text/javascript">
				alert("Entering the hunt :))");
				window.location="que1.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
				alert("Sorry :((...You cannot enter the hunt now...");
			</script>
			<?php
		}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Entrance</title>
	<link rel="stylesheet" type="text/css" href="enter.css">
</head>
<body>



<h3>EXCITED!!! &nbsp RIGHT??</h3>
<b><p>Put your thinking caps on and BE READY!!</p></b>




<form action="" method="POST">
	<b><center>Team Name: <input type="text" name="tm_nm" required="yes" style="width:20%; height: 20px;">
	<input type="submit" name="entr" value="ENTER!!!" style="width: 10%;height: 40px;font-size: 25px; background-color: lightblue;" > or <a href="http://localhost/iohunt/iohunt_reg/" style="color: Black;">Register Here</a></center> </b>
</form>

<h2><u>RULES and REGULATIONS</u></h2>
<b><ul>
	<li>To participate in the event, the team size must be two.
	<li>There are no restrictions on searching for the questions. You can search on any search engine and take reference from any site of your choice.
	<li>The event will be live for only 120 minutes.
	<li>There will be three prizes for the winner and the first and second runner up. The positions will be decided solely on the basis of individual timings.
	<li>No clarifications regarding the questions or the clues will be given during the event.
	<li>All the sufficient clues will be provided at the bottom of the source code of the page. In case you don’t know how to see the source code of the page, right click anywhere on the page and select ‘View Source’ option.
	<li>To go to the next destination, you have to delete the letters between ‘.php’ at the end of the URL and the first ‘/’ form the right, and type the answer of the current puzzle in its place. For example, the current URL is “abc/random/url.php” and the answer to the current question is “answer” and current question number is "x". Hence the new URL for you will be “abc/random/x-answer.php”.
	<li>The answer might be a word or a number.
	
</ul></b>


</body>
</html>