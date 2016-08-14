<?php
$secret_password = 'ENTER YOUR SECRET PASSWORD HERE';
$password = $_REQUEST['pwd'];
$credit = $_REQUEST['c'];
$user = trim($_REQUEST['u']);
$type = trim($_REQUEST['t']);
$status = trim($_REQUEST['s']);


if( $password == $secret_password )
{
	if($status == 1)
	{
     	if($type ==1)
     	{
      		//Credit Cash to user
     		//Add Your Queries here
     	}
     	else
     	{
       		//Credit Point to use
         	//Add Your Queries here
      	}
   	exit('Done');
 	}
	else
	{
		 if($type ==1)
     	{
      		//Debit Cash
     		//Add Your Queries here
   	}
   	else
   	{
       		//Debit Point 
         	//Add Your Queries here
   	}
   	exit('Done');
	}			
}
else
{
	die();
}
?>
