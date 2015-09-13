
<?php
echo"<p>";
echo'<ul class="hr">';

$previouspage1=$page-2;
$previouspage2=$page-1;
$nextpage1=$page+2;
$nextpage2=$page+3;


if($page==1) {
echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage1."</a>";
echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage2."</a>";	
	
}
if($page==2) {
echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage2."</a>";
echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage1."</a>";
echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage2."</a>";	
	
}
if($page>2 && $page<$total-2) {
	echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage1."</a>";
	echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage2."</a>";
	echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage1."</a>";
	echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage2."</a>";	
	
}
if($page==$total-2) {
	echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage1."</a>";
	echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage2."</a>";
	echo"<li><a href=\"single-item.php\" class=\"item\">".$nextpage1."</a>";	
	
}
if($page==$total-1 ||$page==$total) {
	echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage1."</a>";
	echo"<li><a href=\"single-item.php\" class=\"item\">".$previouspage2."</a>";		
}


echo "</ul>";
echo"</p>";

?>

