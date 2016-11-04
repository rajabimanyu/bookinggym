<!DOCTYPE html>
<html>
<head>
    
<meta charset="utf-8" />
  
  <title>Sign-Up</title>
 
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/signup.css" />
  
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

 
   <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  
  <script type="text/javascript" src="js/bootstrap.min.js">
</script>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
      <form role="form" action="signupst.php" method="post">
      <h2>Welcome to <small>Sign up</small></h2>
      <hr class="colorgraph">
      <div class="row">
        
      </div>
      <div class="form-group">
        <input type="text" name="username" id="user_name" class="form-control input-lg" placeholder="User Name" tabindex="3">
      </div>
      <div class="form-group">
        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
          </div>
          <div class="form-group">
            <input type="text" name="age" id="password" class="form-control input-lg" placeholder="age" tabindex="5">
          </div>
        </div>
         <div class="form-group">
        <input type="text" name="height" id="email" class="form-control input-lg" placeholder="Height (cm)" tabindex="4">
      </div>
       <div class="form-group">
        <input type="text" name="weight" id="email" class="form-control input-lg" placeholder="Weight (kg)" tabindex="4">
      </div>
      </div>
      <div class="row">
        <div class="col-xs-4 col-sm-3 col-md-3">
         
        </div>
      
      </div>
      
      <hr class="colorgraph">
      <div class="row">
        <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
        <div class="col-xs-12 col-md-6"><a href="index.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
      </div>
    </form>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
      </div>
      <div class="modal-body">
                            <p> Welcome to Step by Step 
                        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>