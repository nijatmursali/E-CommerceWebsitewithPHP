

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
                        <div class="col-xs-6">

                    <?php 
                        if(isset($_POST['submit'])) {

                             $cat_title = $_POST['cat_title'];

                             if($cat_title == "" || empty($cat_title)) {
                                 echo "Ad yazmağı unutma!";
                             }else {
                                 $query = "INSERT INTO menu(label)";
                                 $query .= "VALUE('{$cat_title}') ";

                                 $create_cat = mysqli_query($connection, $query);


                                 if(!$create_cat) {
                                     die('Bəxtini birdaha sına'.mysqli_error($connection));
                                 }
                             }

                        }
 

                    ?>











                        <form action="" method = "post">
                            <div class="form-group">
                                <label for="cat_title">Kateqoriya Əlavə Edin</label>
                                <input class="form-control" type="text" name= "cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name= "submit" value="Kateqoriya əlavə edin">
                            </div>
                         </form>
                        </div>

                        <div class="col-xs-6">
                        <?php 
                        
                        $query = "SELECT * FROM menu";
                        $select_from_cat = mysqli_query($connection, $query);

                        ?>


                            <table class = "table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kateqoriya adı</th>
                                    </tr>
                                </thead>
                         
                                <tbody>
                                <?php
                        while($row = mysqli_fetch_assoc($select_from_cat)) {
                            $cat_id = $row['id'];
                            $cat_title = $row['label'];

                            echo "<tr>";
                            echo "<td>{$cat_id}</td>";
                            echo "<td>{$cat_title}</td>";
                            echo "<tr>";
                        }

                        ?>
                                </tbody>
                            
                            </table>

                        </div>

                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>





<?php include "includes/footer.php" ?>
