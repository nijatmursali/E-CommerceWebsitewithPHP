

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
                                    <th>İstifadəçi ID</th>
                                    <th>Email</th>
                                    <th>Adı</th>
                                    <th>Soyadı</th>
                                    <th>Telefon nömrəsi</th>
                                    <th>Parolu</th>
                                    <th>Useri silmək</th>
                                    <th>Userə daxil olmaq</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $query = "SELECT * FROM details";

                                $select_users = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($select_users)) {
                                    $userid = $row['uid'];
                                    $Email = $row['Email'];
                                    $fname = $row['FirstName'];
                                    $lastname = $row['LastName'];
                                    $mobile = $row['Mob'];
                                    $pass = $row['password'];
                                    
                                    

                                    echo "<tr>";
                                        echo "<td>{$userid}</td>";
                                        echo "<td>{$Email}</td>";
                                        echo "<td>{$fname}</td>";
                                        echo "<td>{$lastname}</td>";
                                        echo "<td>{$mobile}</td>";
                                        echo "<td>{$pass}</td>";
                                        echo "<td><a href ='users.php?delete={$userid}'>Silmək</a></td>";
                                    echo "</tr>";
                                }
                            
                            
                            ?>

                        </tbody>
                        </table>

    <?php 
    
    if(isset($_GET['delete'])) {

        $theuserid = $_GET['delete'];

    $query = "DELETE FROM details where uid = {$theuserid}";

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
