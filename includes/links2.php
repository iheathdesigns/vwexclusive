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

$colname_rs_nav2 = "-1";
if (isset($_GET['sort_menu'])) {
  $colname_rs_nav2 = $_GET['sort_menu'];
}
mysql_select_db($database_con_wdimserver, $con_wdimserver);
$query_rs_nav2 = sprintf("SELECT id, title FROM vw_content WHERE sort_menu = %s ORDER BY id ASC", GetSQLValueString($colname_rs_nav2, "int"));
$rs_nav2 = mysql_query($query_rs_nav2, $con_wdimserver) or die(mysql_error());
$row_rs_nav2 = mysql_fetch_assoc($rs_nav2);
$totalRows_rs_nav2 = mysql_num_rows($rs_nav2);mysql_select_db($database_con_wdimserver, $con_wdimserver);
$query_rs_nav2 = "SELECT id, title FROM vw_content ORDER BY id ASC";
$rs_nav2 = mysql_query($query_rs_nav2, $con_wdimserver) or die(mysql_error());
$row_rs_nav2 = mysql_fetch_assoc($rs_nav2);
$totalRows_rs_nav2 = mysql_num_rows($rs_nav2);
$query_rs_nav2 = "SELECT id, title FROM vw_content ORDER BY id ASC";
$rs_nav2 = mysql_query($query_rs_nav2, $con_wdimserver) or die(mysql_error());
$row_rs_nav2 = mysql_fetch_assoc($rs_nav2);
$totalRows_rs_nav2 = mysql_num_rows($rs_nav2);
?>
<ul>
	<?php do { ?>
	  <li><a href="index.php?section=<?php echo $row_rs_nav2['title']; ?>"><?php echo $row_rs_nav2['title']; ?></a></li>
	  <?php } while ($row_rs_nav2 = mysql_fetch_assoc($rs_nav2)); ?>
</ul>
<?php
mysql_free_result($rs_nav2);
?>
