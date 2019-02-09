
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

$maxRows_rs_gallery = 4;
$pageNum_rs_gallery = 0;
if (isset($_GET['pageNum_rs_gallery'])) {
  $pageNum_rs_gallery = $_GET['pageNum_rs_gallery'];
}
$startRow_rs_gallery = $pageNum_rs_gallery * $maxRows_rs_gallery;

mysql_select_db($database_con_wdimserver, $con_wdimserver);
$query_rs_gallery = "SELECT * FROM vw_exclusive ORDER BY file_name ASC";
$query_limit_rs_gallery = sprintf("%s LIMIT %d, %d", $query_rs_gallery, $startRow_rs_gallery, $maxRows_rs_gallery);
$rs_gallery = mysql_query($query_limit_rs_gallery, $con_wdimserver) or die(mysql_error());
$row_rs_gallery = mysql_fetch_assoc($rs_gallery);

if (isset($_GET['totalRows_rs_gallery'])) {
  $totalRows_rs_gallery = $_GET['totalRows_rs_gallery'];
} else {
  $all_rs_gallery = mysql_query($query_rs_gallery);
  $totalRows_rs_gallery = mysql_num_rows($all_rs_gallery);
}
$totalPages_rs_gallery = ceil($totalRows_rs_gallery/$maxRows_rs_gallery)-1;
?>
<center><div id="gallery">
<p>Please click a thumbnail image to see a full size version</p>

<?php do { ?>

<div id="content"><a href="images/lg_<?php echo $row_rs_gallery['file_name']; ?>" rel="lightbox[gallery]" title="<?php echo $row_rs_gallery['id']; ?>">
  <img name="modded" src="images/sm_<?php echo $row_rs_gallery['file_name']; ?>" width="150" height="150" alt="<?php echo $row_rs_gallery['alt']; ?>" style="background-color: #FFFF00" /></a></div>
  <?php } while ($row_rs_gallery = mysql_fetch_assoc($rs_gallery)); ?></div></center>

<?php
mysql_free_result($rs_gallery);
?>
