<?php
$q=$_REQUEST['number'];
$i=0;
$str='';
while($q!=0)
{
	if($q%15==0)
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
	elseif ($q%5==0) {
	if($str=="")
		{
			$str=$str.'BAR';
		}
		else
		{
		$str=$str.','."BAR";
		
		}	
	}
	elseif($q%3==0)
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
	$q--;
}
echo $str;	
?>