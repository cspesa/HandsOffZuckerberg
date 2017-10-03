<html>
<head>
<title>Simple PHP Calculator</title>
</head>
<body>

<form method="post"  >
<input type="text" name="value1">

<select name="action"> <!---remove file path --->

<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select>

<input type="text" name="value2"> <!--- gave name "value2" to input--->

<input type="submit" name="submit" value="Calculate Now"> 
</form>

<?php
error_reporting(E_ALL & ~E_NOTICE); 
	
if(isset($_POST["submit"])) #missing paranthesis 
{
$value1 = $_POST["value1"];
$value2 = $_POST["value2"];
$action = $_POST["action"]; #colon changed to semi-colon, changed == to =
}

if($action=="+") #changed = to ==
{
echo "<b>Your Answer is:</b><br>";
echo $value1+$value2;
}

else if($action=="-"){  #changes if to else if, changed = to ==
echo "<b>Your Answer is:</b><br>";
echo $value1-$value2;
}

else if($action=="*"){  #changes if to else if, changed = to ==
echo "<b>Your Answer is:</b><br>";
echo $value1*$value2;
}

else if($action=="/"){  #changes if to else if, changed = to ==
echo "<b>Your Answer is:</b><br>";
echo $value1/$value2;
}

?>

</body>
</html>