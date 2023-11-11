<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Metode Biseksi</title>
  <link href="data/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

  <style>
    body {
      background-color: #e1e4de;
    }
  </style>
</head>

<body>
  <div id="container">
    <?php
 function persamaan($x)
 {
    return pow($x,3) - 7*$x+1;
 }

 $a =isset($_GET['a'])?$_GET['a']*1:0;
 $b =isset($_GET['b'])?$_GET['b']*1:0;
 $n =isset($_GET['n'])?$_GET['n']*1:0;
?>
    <div class="login-box">
      <div class="login-box-body">
        <div class="col-xs-4">
          <p class="login-box-msg">
            <center><b>
                <h2>Metode Biseksi Atau Bagi Dua</h2>
              </b></center>
          </p>
          <p>Carilah akar persamaan dari <strong>x<sup>3</sup> - 7x + 1</strong></p>
          <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group has-feedback">
              <label>Masukan Nilai a</label>
              <input type="text" name="a" value="<?php echo $a;?>" class="form-control">
              <span class="glyphicon glyphicon-arrow-up form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Masukan Nilai b</label>
              <input type="text" name="b" value="<?php echo $b;?>" class="form-control">
              <span class="glyphicon glyphicon-arrow-down form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <label>Masukan Jumlah Iterasi</label>
              <input type="text" name="n" value="<?php echo $n;?>" class="form-control">
              <span class="glyphicon glyphicon-list-alt form-control-feedback"></span>
            </div>
            <td>&nbsp;</td>
            <td><input class="btn btn-primary btn-block" type="submit" name="button" id="button" value="Submit" /></td>
            </tr>
            </table>
          </form>
        </div>
        <?php

 if($n>0){
    $fa=persamaan($a);
    $fb=persamaan($b);
    if($fa*$fb>=0){
        echo " f(a)*f(b)>0, proses dihentikan karena tidak ada akar !";
    }else

    {
?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="table-responsive mailbox-messages">
          <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <td align="center"><strong>Iterasi</strong></td>
            <td align="center"><strong>a</strong></td>
            <td align="center"><strong>b</strong></td>
            <td align="center"><strong>c</strong></td>
            <td align="center"><strong>f(b)</strong></td>
            <td align="center"><strong>f(c)</strong></td>
            <td align="center"><strong>Action</strong></td>
            <td align="center"><strong>b-a</strong></td>

      <?php 
      $found = false;
      for($k=1;$k<=$n && !$found;$k++){

           $x=($a+$b)/2;
           $fx=persamaan($x);
           $ba=$b-$a;
           $ket="";
           $aa=$a;
           $bb=$b;

          if($fb*$fx<0){
              $ket="a = c";
              $a=$x;
          }else {
            $ket="b = c";
            $b=$x;
          }  
           $fbx=persamaan($b);
          
          
?>
            <tr bgcolor="#FFFFFF">
              <td align="center"><?php echo $k;?></td>
              <td align="center"><?php echo (float)$aa;?></td>
              <td align="center"><?php echo (float)$bb;?></td>
              <td align="center"><?php echo (float)$x;?></td>
              <td align="center"><?php echo number_format($fbx,4,",",".");?></td>
              <td align="center"><?php echo number_format($fx,4,",",".");?></td>
              <td align="center"><?php echo $ket; ?></td>
              <td align="center"><?php echo (float)$ba;?></td>
            </tr>
            <?php
            if((float)$ba <= 0.00080000000000000){
              $found = true;
            }
    }     
?>
          </table>
          <?php
        }
     }
?>
        </div>
      </div>
      <script src="data/bootstrap/dist/css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>