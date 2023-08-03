

<div id="wrapper">

<?php

include("config.php");

?>

<div class="container">
<div class="row">
<div class="col-md-12 ">
<h3 class="font-weight-bold text-center">Form Input Admin</h3>
</div>
</div>

  <div id="content">
  <div id="article">

  <form name="kegiatan" action="proses_insert.php" method="post">
  <table cellpadding="3" cellspacing="0" align="center">
    <!-- <tr>
        <td>Kd Admin</td>
        <td>:</td>
        <td><input name='in_KdAdmin' id='in_KdAdmin' class='form-control' type='text' ></td>
    </tr> -->
    <tr>
        <td>Nama User</td>
        <td>:</td>
        <td><input name='in_NamaAdmin' id='in_NamaAdmin' class='form-control' type='text' ></td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input name='in_Username' id='in_Username' class='form-control' type='text' ></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input name='in_Password' id='in_Password' class='form-control' type='password' ></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input name='in_Email' id='in_Email' class='form-control' type='text' >
        <input name='in_Level' id='in_Level' class='form-control' type='hidden' value="1" >
        </td>
    </tr>
    
  </tr>
    <tr>
    <td></td>
    <td></td>
    <td>
      <button type="submit" name="btn_user_tambah" class="btn btn-info">Submit</button>
    </td>
   </tr>

  </table>
  
 </form>

 </div>
 </div> </div> </div>


