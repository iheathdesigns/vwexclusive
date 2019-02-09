<?php require_once('../Connections/con_wdimserver.php'); ?>
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
$query_rs_content_a = "SELECT * FROM vw_content WHERE title = 'home'";
$rs_content_a = mysql_query($query_rs_content_a, $con_wdimserver) or die(mysql_error());
$row_rs_content_a = mysql_fetch_assoc($rs_content_a);
$totalRows_rs_content_a = mysql_num_rows($rs_content_a);?>


<?php echo $row_rs_content_a['body_content']; ?>

<?php mysql_free_result($rs_content_a);
?>
