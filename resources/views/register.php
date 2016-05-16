<?php
include('header.php');
?>

<?php
$encrypter = app('Illuminate\Encryption\Encrypter');
$encrypted_token = $encrypter->encrypt(csrf_token());
?>

  <form action="register" method="post">
  <h1>Register Here!</h1>
  <label>
    <span>  First Name :</span>
    <input id="fname" type="text" name="fname" placeholder="First Name" required/>
  </label>

  <label>
    <span>  Last Name :</span>
    <input id="lname" type="text" name="lname" placeholder="Last Name" required/>
  </label>
  <label>
    <span>  Email Address :</span>
    <input id="email" type="text" name="email" placeholder="Valid Email" required/>
  </label>
  <label>
    <span>  Username :</span>
    <input id="username" type="text" name="username" placeholder="Create Username" required/>
  </label>
  <label>
    <span>  Password:</span>
    <input id="password" type="password" name="password" placeholder="Enter Password" required/>
  </label>
  <label>
    <span>&nbsp;</span>
    <input type="submit" name="submit" value="Submit"/>
  </label>
    <input type="hidden" name="_token" value="<?php csrf_token(); ?>" />
</form>

<?php
include('footer.php');
?>