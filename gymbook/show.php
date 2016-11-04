<?php
include 'db.php';
include 'adsession.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>gym</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
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
                        <li><a href="adlogout.php">Logout</a></li>
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
                        <h1>Hello, world!</h1>
                        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                    </div>
                   
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->

             
            </div><!--/row-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row">
        
        
        <div class="col-md-12">
        <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   <th>ID</th>
                    <th>Name</th>
                     <th>Email</th>
                     <th>Age</th>
                     <th>BMI</th>
                      <th>FROM</th>
                      <th>TO</th>
                       <th>Total Amount</th>
                      
                   </thead>
    <tbody>
    
     <?php
@$result=mysqli_query($conn,"SELECT * FROM conf");
while($table=mysqli_fetch_assoc($result)){
  echo '
    <tbody>
    
    <tr>
    
    <td>'.@$table[id].'</td>
    <td>'.@$table[name].'</td>
    <td>'.@$table[email].'</td>
    <td>'.@$table[age].'</td>
    <td>'.@$table[bmi].'</td>
    <td>'.@$table[fromd].'</td>
    <td>'.@$table[tod].'</td>
    <td>'.@$table[total].'</td>
    </tr>
    ';}
?>
    
   
    
   
    
    </tbody>
        
</table>


  </div>
      <!-- /.modal-dialog --> 
    </div>
            <hr>

            <footer>
                <p>© Company 2014</p>
            </footer>

        </div><!--/.container-->
</body>
</html>