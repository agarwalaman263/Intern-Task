<?php
$q=$_REQUEST['number'];
$i=0;
$str='';
for($i=1;$i<=$q;$i++)
{
	if($i%15==0)
	{
		if($str=="")
		{
			$str=$str.$i;
		}
		else
		{
		$str=$str.','.$i;
		}
		$str=$str.','."FOOBAR";
		
	}
	elseif ($i%5==0) {
			if($str=="")
		{
			$str=$str.$i;
		}
		else
		{
		$str=$str.','.$i;
		
		}
		$str=$str.','."BAR";
	
	}
	elseif($i%3==0)
	{
			if($str=="")
		{
			$str=$str.$i;
		}
		else
		{
		$str=$str.','.$i;
		
		}
		$str=$str.','."FOO";
	}
	else
	{

	}
	
}
echo $str;	
?>