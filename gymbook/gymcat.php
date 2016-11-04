<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>gym</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>


<!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

        <div class="container">

            <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div class="jumbotron">
                        <h1>Gym Database</h1>
                        <p>Gym portal.</p>
                    </div>
                   
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->

                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <a href="sar.php" class="list-group-item">Saravanampatty</a>
                        <a href="gan.php" class="list-group-item">Ganapathy</a>
                        <a href="gand.php" class="list-group-item">Gandhipuram</a>
                        <a href="rac.php" class="list-group-item">Race Course</a>
                        <a href="rs.php" class="list-group-item">RS Puram</a>
                      
                    </div>
                </div><!--/.sidebar-offcanvas-->
            </div><!--/row-->

            <hr>

            <footer>
                <p>© Gym Management</p>
            </footer>

        </div><!--/.container-->
</body>
</html>