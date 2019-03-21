

<?php include "includes/header.php" ?>



<style>
	table, th, td {

		font-family: Georgia, 'Times New Roman', Times, serif;
		font-style:italic;
		border: 2px solid black;
		padding: 5px;
	}
		</style>

<div id="wrapper">
	<?php include "includes/navigations.php" ?>
		
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin panelə xoş gəlmisiz!
                            <small>Xulio</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
														</li>
														
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>




<div align="center">
  <a href="index.php"><h1 class="style2" style="font-family:Georgia, 'Times New Roman', Times, serif">Admin paneli</h1></a>
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">

    <table class="table table-striped table-bordered table-hover table-condensed" style="width: 50%">
      <tr>
        <th><div>ID-i daxil edərək silin: </div></th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th>
          <input type="text" class="form-control" name="pid" placeholder="Məhsulun İD-i qeyd edin" />
        </th>
        <td><input class="form-control" name="dltpr" type="submit" id="dltpr" value="Məhsulu silin" /></td>
      </tr>
      <tr>
        <th><div>İstifadəçi silin: </div></th>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <th><div>
          <input type="text" class="form-control" name="uid" placeholder="İstifadəçi adını qeyd edin" />
        </div></th>
        <td><input class="form-control" name="dltuser" type="submit" id="dltuser" value="İstifadəçi silin" /></td>
      </tr>

    </table>
  </form>
  <hr>
</div>
<div style="width: 100%">
<?php

$conn = new mysqli("localhost", "root", "", "barter");
if ($conn -> connect_error) {
die("Connection failed:" . $conn -> connect_error);
}

//------------------məhsulu silmək----------------------

if (isset($_POST['dltpr'])) {
	echo '<div style="width:49%; float:left;"><h2>Product Table</h2>';
	$id=$_REQUEST['pid'];
	$sql = "DELETE FROM addproducts WHERE pid=$id";
	$conn -> query($sql);

	$sql = "SELECT pid,title,price FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Məhsulun adı</th>
	<th>Qiyməti</th>
	<th>Link</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["pid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["price"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
}

//--------------------delete user----------------------

elseif (isset($_POST['dltuser'])) {
	echo '<div style="width=49%; float:left;"><h2>User Table</h2>';
	$id=$_REQUEST['uid'];
	$sql = "DELETE FROM details WHERE uid=$id";
	$result = $conn -> query($sql);

	$sql = "SELECT uid,Email,password FROM details ORDER BY uid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Userin adı</th>
	<th>Parolu</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["uid"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["password"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}

}

else {

	//--------------------------product---------------------------

	echo '<div style="width:49%; float:left;"><h2>Product Table</h2>';
	$sql = "SELECT pid,title,price, image FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Məhsulun adı</th>
	<th>Qiyməti</th>
	<th>Şəkil</th>
	<th>Link</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr> 
		<td>" . $row["pid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["price"] . 
			"AZN</td> <td><img src='http://localhost/bartero/".$row["image"]."' height=100px width=100px></td><td><a href='http://localhost/bartero/products.php?op=pdesc&pid=".$row["pid"]."'>"  .$row["title"] . "</a></td>
	</tr>";
	}
	
	echo "</table></div>";
	} else {
	echo "0 results";
	}

	//------------------user----------------------------

	echo '<div style="width:49%; float:left;"><h2>User Table</h2>';
	$sql = "SELECT uid,Email,password FROM details ORDER BY uid";
	$result = $conn -> query($sql);

	if ($result -> num_rows > 0) {
	echo '
	<table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:50%">
	<tr class="info">
	<th>ID</th>
	<th>Userin adı</th>
	<th>Parolu</th>
	</tr>';

	while ($row = $result -> fetch_assoc()) {
	echo "
	<tr>
		<td>" . $row["uid"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["password"] . "</td>
	</tr>";
	}

	echo "</table></div>";
	} else {
	echo "0 results";
	}
	}
?>
</div>


<?php include "includes/footer.php" ?>
