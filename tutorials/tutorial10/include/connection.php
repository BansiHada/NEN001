<?php
 $db=new mysqli("sql111.epizy.com","epiz_30734380","P3oWuRyYUX0Hx","epiz_30734380_tutorial10");
 if($db->connect_error)
	{
	echo $db->connect_error;
	}
else
{
	//echo "connection ok";
}
?>