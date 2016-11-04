<?php
@$price=$_POST['price'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>gym</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/gymimg.css">
<link rel="stylesheet" type="text/css" href="css/month.css">	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="js/month.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
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
#hide{
    display: none;
}
select { width: 400px; text-align:center; }
select .lt { text-align:center; }
select { text-indent: 5px; }
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
            <form action="book1.php" method="post">
<select name="month" class="ddList">
<option value="">(please selects number of months)</option>
<option class="lt" value="--">none</option>
<option class="lt" value="1">1</option>
<option class="lt" value="2">2</option>
<option class="lt" value="3">3</option>
<option class="lt" value="4">4</option>
<option class="lt" value="5">5</option>
<option class="lt" value="6">6</option>
<option class="lt" value="7">7</option>
<option class="lt" value="8">8</option>
<option class="lt" value="9">9</option>
<option class="lt" value="10">10</option>
<option class="lt" value="11">11</option>
<option class="lt" value="12">12</option>
</select>
<input type="text" name="pri" id="hide" value="<?php echo $price; ?>">
<input type="submit">
</form>

            <hr>

            <footer>
                <p>© Company 2014</p>
            </footer>

        </div><!--/.container-->
</body>
</html>