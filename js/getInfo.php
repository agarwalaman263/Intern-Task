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
			$str=$str.'FOOBAR';
		}
		else
		{
		$str=$str.','."FOOBAR";
		
		}
	}
	elseif ($i%5==0) {
	if($str=="")
		{
			$str=$str.'BAR';
		}
		else
		{
		$str=$str.','."BAR";
		
		}	
	}
	elseif($i%3==0)
	{
	if($str=="")
		{
			$str=$str.'FOO';
		}
		else
		{
		$str=$str.','."FOO";
		
		}	
	}
	else
	{

	}
	
}
echo $str;	
?>