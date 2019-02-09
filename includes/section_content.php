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

$colname_rs_content_b = "-1";
if (isset($_GET['section'])) {
  $colname_rs_content_b = $_GET['section'];
}
mysql_select_db($database_con_wdimserver, $con_wdimserver);
$query_rs_content_b = sprintf("SELECT * FROM vw_content WHERE title = %s", GetSQLValueString($colname_rs_content_b, "text"));
$rs_content_b = mysql_query($query_rs_content_b, $con_wdimserver) or die(mysql_error());
$row_rs_content_b = mysql_fetch_assoc($rs_content_b);
$totalRows_rs_content_b = mysql_num_rows($rs_content_b);
?>

<?php echo $row_rs_content_b['body_content']; ?>


<?php mysql_free_result($rs_content_b);
?>
