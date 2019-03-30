<?php include "includes/header.php" ?>

<div class="well">
<h4>Admin Login</h4>
<form action="includes/login.php" method="POST">
    
    <div class="input-group">
        <input type="text" name="username" class="form-control" placeholder="Logini daxil edin">
    </div>
    <div class="input-group">
        <input type="text" name="password" class="form-control" placeholder="Parolu daxil edin">
    </div>   
    <span class="input-group-btn">
        <button class="btn btn-primary" name="login" type="submit">
            Daxil olun
        </button>
    
    </span>  
</form>
<div>