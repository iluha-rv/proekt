<?php $title='Название сайта';
require_once('templates/top.php');
?>
<form method='POST'>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input type="login" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="name" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <!--<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>   -->
  <!--<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>     -->
  <!--<div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>  -->
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php require_once('templates/bottom.php');?>

