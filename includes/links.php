<?php require_once('../../Connections/con_wdimserver.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_con_wdimserver, $con_wdimserver);
$query_rs_nav = "SELECT id, title FROM vw_content ORDER BY sort_menu ASC";
$rs_nav = mysql_query($query_rs_nav, $con_wdimserver) or die(mysql_error());
$row_rs_nav = mysql_fetch_assoc($rs_nav);
$totalRows_rs_nav = mysql_num_rows($rs_nav);
?>

<ul>
	<?php do { ?>

	<li><a href="index.php?section=<?php echo $row_rs_nav['title']; ?>"><?php echo $row_rs_nav['title']; ?></a></li>
   <?php } while ($row_rs_nav = mysql_fetch_assoc($rs_nav)); ?>
  </ul>
 <?php
mysql_free_result($rs_nav);
?>
