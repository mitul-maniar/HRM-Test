<?php session_start();
ob_start();
if(!isset($_SESSION['userid']))
   {
		if (isset($_GET['red']))
		{
			$url="?red=".$_GET['red'];
			if($_GET['red']=='confirm_member.php')
			{
				$url=$url."?tokencode=".$_GET['tokencode']."&ber=".$_GET['ber'];
				echo $url;
			}
		}
		else
		{
			$url="";
		}
		header('Location:index.php'.$url);
   }
?>
