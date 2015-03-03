 <?php 
	error_reporting(E_ALL^E_DEPRECATED);
	mysql_connect("localhost","root","");
	mysql_select_db("acet");

	$q= mysql_query("Select * from gallery");
	while($r= mysql_fetch_assoc($q)){
		echo "<img src='gallery/".$r['name']."' width='100'>";
	}
	?>