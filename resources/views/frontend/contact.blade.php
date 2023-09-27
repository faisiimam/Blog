@extends('frontend.layouts.master')
@section('container')


<div class="container center mb-08">
<form action="form.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>
  <label for="email">E-mail:</label><br>
  <input type="text" id="email" name="email" value=""><br>
  <label for="textarea">Message:</label><br>
  <input type="text" id="msg" name="message" value=""><br><br>
  <input type="submit" value="Submit">
</form>
</div> 


@endsection