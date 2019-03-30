<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="loggedIn.php">Xulionun admin paneli</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['FirstName'];?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="includes/profile.php"><i class="fa fa-fw fa-user"></i> Profil</a>
                            
                        </li>

                        <li class="divider"></li>
                        <li>
                            
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Çıxış etmək</a>
                            
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
            
            
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="loggedIn.php"><i class="fa fa-fw fa-dashboard"></i> Ana səhifə</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts"><i class="fa fa-fw fa-arrows-v"></i> Elanlar <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts" class="collapse">
                            <li>
                                <a href="elanlar.php">Bütün elanları göstər</a>
                            </li>
                            <li>
                                <a href="#">Elan əlavə et</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="categories.php"><i class="fa fa-fw fa-wrench"></i> Kateqoriyalar</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> İstifadəçilər <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">İstifadəçilərə baxın</a>
                            </li>
                            <li>
                                <a href="#">İstifadəçi əlavə edin</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> Kommentlər</a>
                    </li>
                    <li>
                        <a href="includes/profile.php"><i class="fa fa-fw fa-dashboard"></i> Admin profili</a>
                    </li>
                </ul>
            </div>



            <!-- /.navbar-collapse -->
        </nav>