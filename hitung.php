<?php
     $a =isset($_GET['a'])?$_GET['a']*1:0;
     $b =isset($_GET['b'])?$_GET['b']*1:0;
     $n =isset($_GET['n'])?$_GET['n']*1:0;

     function persamaan($x)
     {
          //  return $x-1-pow(M_E,-$x);
          return pow($x,3) - 7*$x+1;
     }

    $data_r="";
    if($n>0){
        $fa=persamaan($a);
        $fb=persamaan($b);
        if($fa*$fb>=0){
            echo "proses dihentikan karena tidak ada akar !";
        }else{
            for($k=1;$k<=$n;$k++){
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
                $hasil_fa= pow($aa,3) -7*$aa+1;
                $hasil_fb= pow($bb,3) -7*$bb+1;
                $hasil_fc= pow($a,3) -7*$a+1;

                echo "Iterasi ".$k."<br>";
                echo "a = ".(float)$aa." b =".(float)$bb."<br>";
                echo "c = ".$a." + ".$b." / 2 = ".$fx ."<br>";
                echo "f(a) = ".$aa." pangkat 3 - 7 "."(".$aa.") + 1 = ". (float)$hasil_fa ."<br>"; 
                echo "f(b) = ".$bb." pangkat 3 - 7 "."(".$bb.") + 1 = ". (float)$hasil_fb ."<br>"; 
                echo "f(c) = ".$a." pangkat 3 - 7 "."(".$a.") + 1 = ". (float)$hasil_fc ."<br>"; 
                echo "f(a).f(c) = ". $hasil_fa ." x ". $hasil_fc . " = ".  (float)(-$hasil_fa)*(float)(-$hasil_fc) ."<br><br>";
            }
        }
    }
?>