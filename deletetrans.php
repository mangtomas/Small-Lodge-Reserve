<?
    // constants
    require_once("includes/common.php"); 
    
    // get the number of people staying in the lodge
    $changetransid = mysql_real_escape_string($_GET["deltrans"]);
    
    // Delete whole reservation
	$sqlchange = "DELETE FROM rsrvtrans WHERE transactionid='$changetransid'";
	mysql_query($sqlchange);
	
	redirect("admincenter.php");
    
?>

