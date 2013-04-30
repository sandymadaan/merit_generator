<?php
 
 // Inialize session
 session_start();
 
 // Check, if username session is NOT set then this page will jump to
 // login page
 if (!isset($_SESSION['username'])) {
	 header('Location: index.php');
 }
 
 ?>
 <html>
<head>
<title>Merit Generator</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
</head>
<body>

<?php
$con = mysql_connect("localhost","root","a");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("department_project", $con);

for($i = 1; $i <= 9; $i++)
{
	$name = "select" . $i;
	if($_REQUEST[$name] != "Select")
	{
		$type = $_REQUEST[$name];
		break;
	}
}

$mysql_query = array(
    "1.1" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' order by aieee_rank",

    "1.2" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='BA' order by aieee_rank ",

	"1.3" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='BC' order by aieee_rank", 

	"1.4" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='BR' order by aieee_rank",

	"1.5" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='PM' order by aieee_rank",

	"1.7" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='DP1' order by aieee_rank",
	
	"1.8" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='DP2' order by aieee_rank",

	"1.9" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='DP3' order by aieee_rank",

	"1.10" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='FF' order by aieee_rank",

	"1.11" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='RT' order by aieee_rank",

	"1.12" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='SC' order by aieee_rank",

	"1.14" => "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='TS' order by aieee_rank",

	"2.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND rural_urban='Rural' order by aieee_rank",

	"2.2" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='BA' AND rural_urban='Rural' order by aieee_rank",

	"2.3" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND
student_category='BC' AND rural_urban='Rural' order by aieee_rank",

	"2.4" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='BR' AND rural_urban='Rural' order by aieee_rank",

	"2.5" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='PM' AND rural_urban='Rural' order by aieee_rank",

	"2.7" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND
student_category='BC' AND rural_urban='Rural' order by aieee_rank",

	"2.8" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='BR' AND rural_urban='Rural' order by aieee_rank",

	"2.9" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='PM' AND rural_urban='Rural' order by aieee_rank",


	"2.10" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='RT' AND rural_urban='Rural' order by aieee_rank",

	"2.11" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='PM' AND rural_urban='Rural' order by aieee_rank",

	"2.12" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='BC' AND rural_urban='Rural' order by aieee_rank",

	"2.14" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND 
student_category='TS' AND rural_urban='Rural' order by aieee_rank",

	"3.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND sikh_status='Yes' order by aieee_rank",

	"3.2" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND sikh_status='Yes' AND 
student_category='BA' order by aieee_rank",

	"3.3" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND sikh_status='Yes' AND 
student_category='BC' order by aieee_rank",

	"3.4" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND sikh_status='Yes' AND 
student_category='BR' order by aieee_rank",

	"3.5" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND sikh_status='Yes' AND 
student_category='PM' order by aieee_rank",

	"3.12" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND sikh_status='Yes' AND 
student_category='BC' order by aieee_rank",

	"4.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND rural_urban='Rural' order by aieee_rank",

	"4.2" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='BA' 
AND rural_urban='Rural' order by aieee_rank",

	"4.3" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND  student_category='BC' 
AND rural_urban='Rural' order by aieee_rank",

	"4.4" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND  student_category='BR' 
AND rural_urban='Rural' order by aieee_rank",

	"4.5" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='PM' 
AND rural_urban='Rural' order by aieee_rank",

	"4.12" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' AND student_category='BC' 
AND rural_urban='Rural' order by aieee_rank",

	"5.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' order by aieee_rank",

	"5.2" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' AND student_category='BC' order by aieee_rank",

	"5.3" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' AND  student_category='SC' order by aieee_rank",

	"6.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' AND sikh_status='Yes' order by aieee_rank",

	"6.2" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' AND student_category='BA' AND
sikh_status='Yes' order by aieee_rank",

	"6.3" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' AND  student_category='BC' AND
sikh_status='Yes' order by aieee_rank",

	"7.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Punjab 85' order by aieee_rank",

	"8.1" =>  "SELECT * FROM direct_temp2
WHERE seat_type='Other 15' order by aieee_rank",

	"9.1" =>  "SELECT * FROM direct_temp2 order by aieee_rank",


    );
    
$result = mysql_query($mysql_query[$type]);

// run code in x.php file
// ...
// saving captured output to file
// end buffering and displaying page
echo "<div align='right'>";
echo "Username:".$_SESSION['username'];
echo "<br>";
echo "<a href='logout.php'>"."Logout"."</a></div>";
ob_start();
echo "<h1><center>"."Guru Nanak Dev Engineering College,
Ludhiana"."</center></h1>";
echo "<h2><center>"."Merit List 2013" ."</center></h2>";
echo "<table border='1' width='100%'>
<tr>
	<th>S.No</th>
	<th>Form_No</th>
	<th>AIEEE Roll No</th>
	<th>AIEEE Rank</th>
	<th>Name</th>
</tr>";

$counter=0;

while($row = mysql_fetch_array($result) )
{
  echo "<tr>";
  echo "<td align='center'>" . ++$counter . "</td>";
  echo "<td align='center'>" . $row['form_no'] . "</td>";
  echo "<td align='center'>" . $row['aieee_roll_no'] . "</td>";
  echo "<td align='center'>" . $row['aieee_rank'] . "</td>";
  echo "<td align='center'>" . $row['name'] . "</td>";
  echo "</tr>";
}
echo "</table>";

file_put_contents('output.html', ob_get_contents());
ob_end_flush();
mysql_close($con);
?>

		<dl>
			<dd><button type="button" name="test" id="test"
			ONCLICK="window.location.href='http://localhost/dompdf_work/domhtml.php'">
			Convert to PDF</button></dd>
					
       </dl>
							
</body>
</html>
