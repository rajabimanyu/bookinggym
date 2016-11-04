<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>gym</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/gymimg.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
    <style type="text/css">
        <style type="text/css">

.wrap {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -86px;
  margin-left: -89px;
  text-align: center;
}

a {
  -webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  -moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  -ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  -o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
  display: block;
  margin: 20px auto;
  max-width: 180px;
  text-decoration: none;
  border-radius: 4px;
  padding: 20px 30px;
}

a.button {
  color: rgba(30, 22, 54, 0.6);
  box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
}

a.button:hover {
  color: rgba(255, 255, 255, 0.85);
  box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
}

a.button2 {
  color: rgba(30, 22, 54, 0.6);
  box-shadow: rgba(30, 22, 54, 0.4) 0 0px 0px 2px inset;
}

a.button2:hover {
  color: rgba(255, 255, 255, 0.85);
  box-shadow: rgba(30, 22, 54, 0.7) 0 80px 0px 2px inset;
}
#hid{
    display: none;
}
</style>
    </style>
</head>
<body>
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
                        <h1>Gyms in Saravanampatty</h1>
                    </div>
                   
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->

             
            </div><!--/row-->

            <div class="container">
    <div class="row">
    </div>
    <hr>
            <div class="row row-margin-bottom">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="gym1.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                gym1
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <p>AC</p><br>
                                <p>Steam Bath</p><br>
                                <p>Imported Equipments</p><br>
                                <p>Fees:Rs.200</p><br>
                            </div>
                            <div class="wrap">
                            <form action="book.php" method="post">
                                <input type="text" name="price" id="hid" value="200">
                                                                <input type="text" name="gym" id="hid" value="gym1">
                                   
                                <input type="submit" class="button" value="Book Now"></input>
                            </form>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img" src="gym2.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                gym2
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <p>Seperate Timiing for Women</p><br>
                                <p>Non AC</p><br>
                                <p>Suplement Available</p><br>
                                <p>Fees:Rs.300</p><br>
                            </div>
                            <div class="wrap">
                             <form action="book.php" method="post">
                                <input type="text" name="price" id="hid" value="300">
                                 <input type="text" name="gym" id="hid" value="gym2">
                                <input type="submit" class="button" value="Book Now"></input>
                            </form>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-margin-bottom">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show" src="gym3.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
gym3                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <p>Swimming Pool</p><br>
                                <p>Steam Bath</p><br>
                                <p>Imported Equipments</p><br>
                                <p>Fees:Rs.250</p><br>
                            </div>
                            <div class="wrap">
                             <form action="book.php" method="post">
                                <input type="text" name="price" id="hid" value="250"> 
                                 <input type="text" name="gym" id="hid" value="gym3">
                                <input type="submit" class="button" value="Book Now"></input>
                            </form>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 no-padding lib-item" data-category="ui">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img" src="gym4.jpg">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
gym4                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                 <p>Yoga</p><br>
                                <p>Steam Bath</p><br>
                                <p>Imported Equipments</p><br>
                                <p>Fees:Rs.180</p><br>
                            </div>
                            <div class="wrap">
                             <form action="book.php" method="post">
                                <input type="text" name="price" id="hid" value="180">
                                 <input type="text" name="gym" id="hid" value="gym4">
                                <input type="submit" class="button" value="Book Now"></input>
                            </form>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

            <hr>

            <footer>
                <p>© Company 2014</p>
            </footer>

        </div><!--/.container-->
</body>
</html>