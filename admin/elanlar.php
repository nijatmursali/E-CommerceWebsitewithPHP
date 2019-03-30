

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

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Məhsul ID</th>
                                    <th>Elanın adı</th>
                                    <th>Şəhər</th>
                                    <th>Məlumat</th>
                                    <th>Qiymət</th>
                                    <th>Kateqoriya ID</th>
                                    <th>Şəkil</th>
                                    <th>Elanın sahibi</th>
                                    <th>Maili</th>
                                    <th>Telefon nömrəsi</th>
                                    <th>Elana daxil ol</th>
                                    <th>Elanı silmək</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $query = "SELECT * FROM addproducts";

                                $select_products = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($select_products)) {
                                    $prodid = $row['pid'];
                                    $title = $row['title'];
                                    $city = $row['city'];
                                    $description = $row['descri'];
                                    $price = $row['price'];
                                    $catid = $row['cid'];
                                    $image = $row['image'];
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $mobile = $row['mob'];
                                    

                                    echo "<tr>";
                                        echo "<td>{$prodid}</td>";
                                        echo "<td>{$title}</td>";
                                        echo "<td>{$city}</td>";
                                        echo "<td>{$description}</td>";
                                        echo "<td>{$price}</td>";
                                        echo "<td>{$catid}</td>";
                                        echo "<td><img class='img-responsive' src='../$image'></td>";
                                        echo "<td>{$name}</td>";
                                        echo "<td>{$email}</td>";
                                        echo "<td>{$mobile}</td>";
                                        echo "<td><a href='http://localhost/bartero/products.php?op=pdesc&pid=$prodid'>Girmək</td>";
                                        echo "<td><a href='elanlar.php?delete={$prodid}'>Silmək</a></td>";
                                    echo "</tr>";
                                }
                            
                            
                            ?>

                        </tbody>
                        </table>

    <?php 
    
    if(isset($_GET['delete'])) {

        $theproid = $_GET['delete'];

    $query = "DELETE FROM addproducts where pid = {$theproid}";

    $delete_query = mysqli_query($connection, $query);

    }
    
    
    ?>        


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>





<?php include "includes/footer.php" ?>
