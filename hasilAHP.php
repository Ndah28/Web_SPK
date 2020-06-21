<?php

?>

<div class="col-md-12">

    <?php
    // Kriteria pasar
    $c1c1 = 1.00;
    $c1c2 = 0.33;
    $c1c3 = 2.00;
    $c1c4 = 2.00;
    // Kriteria pendapatan
    $c2c1 = 3.00;
    $c2c2 = 1.00;
    $c2c3 = 5.00;
    $c2c4 = 3.00;
    // Kriteria infrastruktur
    $c3c1 = 0.50;
    $c3c2 = 0.20;
    $c3c3 = 1.00;
    $c3c4 = 2.00;
    // Kriteria transportasi
    $c4c1 = 0.50;
    $c4c2 = 0.33;
    $c4c3 = 0.50;
    $c4c4 = 1.00;
    // jumlah
    $c1 = $c1c1+$c2c1+$c3c1+$c4c1;
    $c2 = $c1c2+$c2c2+$c3c2+$c4c2;
    $c3 = $c1c3+$c2c3+$c3c3+$c4c3;
    $c4 = $c1c4+$c2c4+$c3c4+$c4c4;
    ?>
    <h3>Menghitung bobot prioritas</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Kriteria</th>
          <th>Pangsa pasar</th>
          <th>Tingkat pendapatan</th>
          <th>Infrastruktur</th>
          <th>Transportasi</th>
      </tr>
      <tr>
          <th>Pangsa pasar</th>
          <td><?php echo $c1c1?></td>
          <td><?php echo $c1c2?></td>
          <td><?php echo $c1c3?></td>
          <td><?php echo $c1c4?></td>
      </tr>
      <tr>
          <th>Tingkat pendapatan</th>
          <td><?php echo $c2c1?></td>
          <td><?php echo $c2c2?></td>
          <td><?php echo $c2c3?></td>
          <td><?php echo $c2c4?></td>
      </tr>
      <tr>
          <td>Infrastruktur</td>
          <td><?php echo $c3c1?></td>
          <td><?php echo $c3c2?></td>
          <td><?php echo $c3c3?></td>
          <td><?php echo $c3c4?></td>
      </tr>
      <tr>
          <th>Transportasi</th>
          <td><?php echo $c4c1?></td>
          <td><?php echo $c4c2?></td>
          <td><?php echo $c4c3?></td>
          <td><?php echo $c4c4?></td>
      </tr>
      <tr>
          <th>Jumlah</th>
          <td><?php echo $c1?></td>
          <td><?php echo $c2?></td>
          <td><?php echo $c3?></td>
          <td><?php echo $c4?></td>
      </tr>

      <!-- normalisasi -->
      <?php
        // pasar
        $c11 = $c1c1/$c1;
        $c12 = $c1c2/$c2;
        $c13 = $c1c3/$c3;
        $c14 = $c1c4/$c4;

        // pendapatan
        $c21 = $c2c1/$c1;
        $c22 = $c2c2/$c2;
        $c23 = $c2c3/$c3;
        $c24 = $c2c4/$c4;

        // infrastruktur
        $c31 = $c3c1/$c1;
        $c32 = $c3c2/$c2;
        $c33 = $c3c3/$c3;
        $c34 = $c3c4/$c4;

        // transportasi
        $c41 = $c4c1/$c1;
        $c42 = $c4c2/$c2;
        $c43 = $c4c3/$c3;
        $c44 = $c4c4/$c4;

        // jumlah
        $njumlahc1 = $c11+$c12+$c13+$c14;
        $njumlahc2 = $c21+$c22+$c23+$c24;
        $njumlahc3 = $c31+$c32+$c33+$c34;
        $njumlahc4 = $c41+$c42+$c43+$c44;

        // PW
        $npwc1 = $njumlahc1/4;
        $npwc2 = $njumlahc2/4;        
        $npwc3 = $njumlahc3/4;        
        $npwc4 = $njumlahc4/4;

        //CRPW
        $cr1 = (($c1c1*$npwc1)+($c1c2*$npwc2)+($c1c3*$npwc3)+($c1c4*$npwc4))/$npwc1;
        $cr2 = (($c2c1*$npwc1)+($c2c2*$npwc2)+($c2c3*$npwc3)+($c2c4*$npwc4))/$npwc2;
        $cr3 = (($c3c1*$npwc1)+($c3c2*$npwc2)+($c3c3*$npwc3)+($c3c4*$npwc4))/$npwc3;
        $cr4 = (($c4c1*$npwc1)+($c4c2*$npwc2)+($c4c3*$npwc3)+($c4c4*$npwc4))/$npwc4;

        //LamdaMaks, CI, CR
        $l1 = ($cr1+$cr2+$cr3+$cr4)/4;
        $ci1 = ($l1-4)/(4-1);
        $cr1 = $ci1/0.9;
      ?>
    </table>
    <h3>Normalisasi dan menghitung PW</h3>
    <div class="container">           
    <table class="table table-bordered" border="1">
      <tr>
          <th>Kriteria</th>
          <th>Pangsa pasar</th>
          <th>Tingkat pendapatan</th>
          <th>Infrastruktur</th>
          <th>Transportasi</th>
          <th>Jumlah</th>
          <th>PW</th>
      </tr>
      <tr>
          <th>Pangsa pasar</th>
          <td><?php echo $c11?></td>
          <td><?php echo $c12?></td>
          <td><?php echo $c13?></td>
          <td><?php echo $c14?></td>
          <td><?php echo $njumlahc1?></td>
          <td><?php echo $npwc1?></td>
      </tr>
      <tr>
          <th>Tingkat pendapatan</th>
          <td><?php echo $c21?></td>
          <td><?php echo $c22?></td>
          <td><?php echo $c23?></td>
          <td><?php echo $c24?></td>
          <td><?php echo $njumlahc2?></td>
          <td><?php echo $npwc2?></td>
      </tr>
      <tr>
          <th>Infrastruktur</th>
          <td><?php echo $c31?></td>
          <td><?php echo $c32?></td>
          <td><?php echo $c33?></td>
          <td><?php echo $c34?></td>
          <td><?php echo $njumlahc3?></td>
          <td><?php echo $npwc3?></td>
      </tr>
      <tr>
          <th>Transportasi</th>
          <td><?php echo $c41?></td>
          <td><?php echo $c42?></td>
          <td><?php echo $c43?></td>
          <td><?php echo $c44?></td>
          <td><?php echo $njumlahc4?></td>
          <td><?php echo $npwc4?></td>
      </tr>
    </table>
    <h3>Menghitung CR dan membagi dengan PW</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Pangsa pasar</th>
          <td><?php echo $cr1?></td>
      </tr>
      <tr>
          <th>Tingkat pendapatan</th>
          <td><?php echo $cr2?></td>
      </tr>
      <tr>
          <th>Infrastruktur</th>
          <td><?php echo $cr3?></td>
      </tr>
      <tr>
          <th>Transportasi</th>
          <td><?php echo $cr4?></td>
      </tr>
    </table>
    <h3>Menghitung LamdaMaks, CI, dan CR</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>LamdaMaks</th>
          <td><?php echo $l1?></td>
      </tr>
      <tr>
          <th>CI</th>
          <td><?php echo $ci1?></td>
      </tr>
      <tr>
          <th>CR</th>
          <td style="background-color:Green;"><?php echo $cr1?></td>
      </tr>
    </table>
    <!-- ...................................................... -->
    <hr></hr>
    <div class="col-md-12">

    <?php
    // Atlanta
    $a1a1 = 1.00;
    $a1a2 = 2.00;
    $a1a3 = 5.00;
    // Birmingham
    $a2a1 = 0.50;
    $a2a2 = 1.00;
    $a2a3 = 2.00;
    // Charlotte
    $a3a1 = 0.20;
    $a3a2 = 0.50;
    $a3a3 = 1.00;

    // jumlah
    $a1 = $a1a1+$a2a1+$a3a1;
    $a2 = $a1a2+$a2a2+$a3a2;
    $a3 = $a1a3+$a2a3+$a3a3;
    ?>
    <h3>Menghitung bobot kriteria pangsa pasar</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Pangsa Pasar</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $a1a1?></td>
          <td><?php echo $a1a2?></td>
          <td><?php echo $a1a3?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $a2a1?></td>
          <td><?php echo $a2a2?></td>
          <td><?php echo $a2a3?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $a3a1?></td>
          <td><?php echo $a3a2?></td>
          <td><?php echo $a3a3?></td>
      </tr>
      <tr>
          <th>Jumlah</th>
          <td><?php echo $a1?></td>
          <td><?php echo $a2?></td>
          <td><?php echo $a3?></td>
      </tr>

      <!-- normalisasi -->
      <?php
        // atlanta
        $a11 = $a1a1/$a1;
        $a12 = $a1a2/$a2;
        $a13 = $a1a3/$a3;

        // birmingham
        $a21 = $a2a1/$a1;
        $a22 = $a2a2/$a2;
        $a23 = $a2a3/$a3;

        // charlotte
        $a31 = $a3a1/$a1;
        $a32 = $a3a2/$a2;
        $a33 = $a3a3/$a3;

        // jumlah
        $njumlaha1 = $a11+$a12+$a13;
        $njumlaha2 = $a21+$a22+$a23;
        $njumlaha3 = $a31+$a32+$a33;

        // PW
        $npwa1 = $njumlaha1/3;
        $npwa2 = $njumlaha2/3;        
        $npwa3 = $njumlaha3/3;        

        //CRPW
        $cra1 = (($a1a1*$npwa1)+($a1a2*$npwa2)+($a1a3*$npwa3))/$npwa1;
        $cra2 = (($a2a1*$npwa1)+($a2a2*$npwa2)+($a2a3*$npwa3))/$npwa2;
        $cra3 = (($a3a1*$npwa1)+($a3a2*$npwa2)+($a3a3*$npwa3))/$npwa3;

        //LamdaMaks, CI, CR
        $la1 = ($cra1+$cra2+$cra3)/3;
        $cia1 = ($la1-3)/(3-1);
        $cra1 = $cia1/0.58;
      ?>
    </table>
    <h3>Normalisasi dan menghitung PW</h3>
    <div class="container">           
    <table class="table table-bordered" border="1">
      <tr>
          <th>Pangsa Pasar</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
          <th>Jumlah</th>
          <th>PW</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $a11?></td>
          <td><?php echo $a12?></td>
          <td><?php echo $a13?></td>
          <td><?php echo $njumlaha1?></td>
          <td><?php echo $npwa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $a21?></td>
          <td><?php echo $a22?></td>
          <td><?php echo $a23?></td>
          <td><?php echo $njumlaha2?></td>
          <td><?php echo $npwa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $a31?></td>
          <td><?php echo $a32?></td>
          <td><?php echo $a33?></td>
          <td><?php echo $njumlaha3?></td>
          <td><?php echo $npwa3?></td>
      </tr>
    </table>
    <h3>Menghitung CR dan membagi dengan PW</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Atlanta</th>
          <td><?php echo $cra1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $cra2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $cra3?></td>
      </tr>
    </table>
    <h3>Menghitung LamdaMaks, CI, dan CR</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>LamdaMaks</th>
          <td><?php echo $la1?></td>
      </tr>
      <tr>
          <th>CI</th>
          <td><?php echo $cia1?></td>
      </tr>
      <tr>
          <th>CR</th>
          <td style="background-color:Green;"><?php echo $cra1?></td>
      </tr>
    </table>
    <!-- ...................................................... -->
    <hr></hr>
    <div class="col-md-12">

    <?php
    // Atlanta
    $aa1aa1 = 1.00;
    $aa1aa2 = 2.00;
    $aa1aa3 = 3.00;
    // Birmingham
    $aa2aa1 = 0.50;
    $aa2aa2 = 1.00;
    $aa2aa3 = 2.00;
    // Charlotte
    $aa3aa1 = 0.33;
    $aa3aa2 = 0.50;
    $aa3aa3 = 1.00;

    // jumlah
    $aa1 = $aa1aa1+$aa2aa1+$aa3aa1;
    $aa2 = $aa1aa2+$aa2aa2+$aa3aa2;
    $aa3 = $aa1aa3+$aa2aa3+$aa3aa3;
    ?>
    <h3>Menghitung bobot kriteria tingkat pendapatan</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Tingkat pendapatan</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $aa1aa1?></td>
          <td><?php echo $aa1aa2?></td>
          <td><?php echo $aa1aa3?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $aa2aa1?></td>
          <td><?php echo $aa2aa2?></td>
          <td><?php echo $aa2aa3?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $aa3aa1?></td>
          <td><?php echo $aa3aa2?></td>
          <td><?php echo $aa3aa3?></td>
      </tr>
      <tr>
          <th>Jumlah</th>
          <td><?php echo $aa1?></td>
          <td><?php echo $aa2?></td>
          <td><?php echo $aa3?></td>
      </tr>

      <!-- normalisasi -->
      <?php
        // atlanta
        $aa11 = $aa1aa1/$aa1;
        $aa12 = $aa1aa2/$aa2;
        $aa13 = $aa1aa3/$aa3;

        // birmingham
        $aa21 = $aa2aa1/$aa1;
        $aa22 = $aa2aa2/$aa2;
        $aa23 = $aa2aa3/$aa3;

        // charlotte
        $aa31 = $aa3aa1/$aa1;
        $aa32 = $aa3aa2/$aa2;
        $aa33 = $aa3aa3/$aa3;

        // jumlah
        $njumlahaa1 = $aa11+$aa12+$aa13;
        $njumlahaa2 = $aa21+$aa22+$aa23;
        $njumlahaa3 = $aa31+$aa32+$aa33;

        // PW
        $npwaa1 = $njumlahaa1/3;
        $npwaa2 = $njumlahaa2/3;        
        $npwaa3 = $njumlahaa3/3;        

        //CRPW
        $craa1 = (($aa1aa1*$npwaa1)+($aa1aa2*$npwaa2)+($aa1aa3*$npwaa3))/$npwaa1;
        $craa2 = (($aa2aa1*$npwaa1)+($aa2aa2*$npwaa2)+($aa2aa3*$npwaa3))/$npwaa2;
        $craa3 = (($aa3aa1*$npwaa1)+($aa3aa2*$npwaa2)+($aa3aa3*$npwaa3))/$npwaa3;

        //LamdaMaks, CI, CR
        $laa1 = ($craa1+$craa2+$craa3)/3;
        $ciaa1 = ($laa1-3)/(3-1);
        $craa1 = $ciaa1/0.58;
      ?>
    </table>
    <h3>Normalisasi dan menghitung PW</h3>
    <div class="container">           
    <table class="table table-bordered" border="1">
      <tr>
          <th>Tingkat Pendapatan</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
          <th>Jumlah</th>
          <th>PW</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $aa11?></td>
          <td><?php echo $aa12?></td>
          <td><?php echo $aa13?></td>
          <td><?php echo $njumlahaa1?></td>
          <td><?php echo $npwaa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $aa21?></td>
          <td><?php echo $aa22?></td>
          <td><?php echo $aa23?></td>
          <td><?php echo $njumlahaa2?></td>
          <td><?php echo $npwaa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $aa31?></td>
          <td><?php echo $aa32?></td>
          <td><?php echo $aa33?></td>
          <td><?php echo $njumlahaa3?></td>
          <td><?php echo $npwaa3?></td>
      </tr>
    </table>
    <h3>Menghitung CR dan membagi dengan PW</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Atlanta</th>
          <td><?php echo $craa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $craa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $craa3?></td>
      </tr>
    </table>
    <h3>Menghitung LamdaMaks, CI, dan CR</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>LamdaMaks</th>
          <td><?php echo $laa1?></td>
      </tr>
      <tr>
          <th>CI</th>
          <td><?php echo $ciaa1?></td>
      </tr>
      <tr>
          <th>CR</th>
          <td style="background-color:Green;"><?php echo $craa1?></td>
      </tr>
    </table>
    <!-- ...................................................... -->
    <hr></hr>
    <div class="col-md-12">

    <?php
    // Atlanta
    $aaa1aaa1 = 1.00;
    $aaa1aaa2 = 0.33;
    $aaa1aaa3 = 0.14;
    // Birmingham
    $aaa2aaa1 = 3.00;
    $aaa2aaa2 = 1.00;
    $aaa2aaa3 = 0.20;
    // Charlotte
    $aaa3aaa1 = 7.00;
    $aaa3aaa2 = 5.00;
    $aaa3aaa3 = 1.00;

    // jumlah
    $aaa1 = $aaa1aaa1+$aaa2aaa1+$aaa3aaa1;
    $aaa2 = $aaa1aaa2+$aaa2aaa2+$aaa3aaa2;
    $aaa3 = $aaa1aaa3+$aaa2aaa3+$aaa3aaa3;
    ?>
    <h3>Menghitung bobot kriteria Infrastruktur</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Infrastruktur</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $aaa1aaa1?></td>
          <td><?php echo $aaa1aaa2?></td>
          <td><?php echo $aaa1aaa3?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $aaa2aaa1?></td>
          <td><?php echo $aaa2aaa2?></td>
          <td><?php echo $aaa2aaa3?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $aaa3aaa1?></td>
          <td><?php echo $aaa3aaa2?></td>
          <td><?php echo $aaa3aaa3?></td>
      </tr>
      <tr>
          <th>Jumlah</th>
          <td><?php echo $aaa1?></td>
          <td><?php echo $aaa2?></td>
          <td><?php echo $aaa3?></td>
      </tr>

      <!-- normalisasi -->
      <?php
        // atlanta
        $aaa11 = $aaa1aaa1/$aaa1;
        $aaa12 = $aaa1aaa2/$aaa2;
        $aaa13 = $aaa1aaa3/$aaa3;

        // birmingham
        $aaa21 = $aaa2aaa1/$aaa1;
        $aaa22 = $aaa2aaa2/$aaa2;
        $aaa23 = $aaa2aaa3/$aaa3;

        // charlotte
        $aaa31 = $aaa3aaa1/$aaa1;
        $aaa32 = $aaa3aaa2/$aaa2;
        $aaa33 = $aaa3aaa3/$aaa3;

        // jumlah
        $njumlahaaa1 = $aaa11+$aaa12+$aaa13;
        $njumlahaaa2 = $aaa21+$aaa22+$aaa23;
        $njumlahaaa3 = $aaa31+$aaa32+$aaa33;

        // PW
        $npwaaa1 = $njumlahaaa1/3;
        $npwaaa2 = $njumlahaaa2/3;        
        $npwaaa3 = $njumlahaaa3/3;        

        //CRPW
        $craaa1 = (($aaa1aaa1*$npwaaa1)+($aaa1aaa2*$npwaaa2)+($aaa1aaa3*$npwaaa3))/$npwaaa1;
        $craaa2 = (($aaa2aaa1*$npwaaa1)+($aaa2aaa2*$npwaaa2)+($aaa2aaa3*$npwaaa3))/$npwaaa2;
        $craaa3 = (($aaa3aaa1*$npwaaa1)+($aaa3aaa2*$npwaaa2)+($aaa3aaa3*$npwaaa3))/$npwaaa3;

        //LamdaMaks, CI, CR
        $laaa1 = ($craaa1+$craaa2+$craaa3)/3;
        $ciaaa1 = ($laaa1-3)/(3-1);
        $craaa1 = $ciaaa1/0.58;
      ?>
    </table>
    <h3>Normalisasi dan menghitung PW</h3>
    <div class="container">           
    <table class="table table-bordered" border="1">
      <tr>
          <th>Infrastruktur</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
          <th>Jumlah</th>
          <th>PW</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $aaa11?></td>
          <td><?php echo $aaa12?></td>
          <td><?php echo $aaa13?></td>
          <td><?php echo $njumlahaaa1?></td>
          <td><?php echo $npwaaa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $aaa21?></td>
          <td><?php echo $aaa22?></td>
          <td><?php echo $aaa23?></td>
          <td><?php echo $njumlahaaa2?></td>
          <td><?php echo $npwaaa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $aaa31?></td>
          <td><?php echo $aaa32?></td>
          <td><?php echo $aaa33?></td>
          <td><?php echo $njumlahaaa3?></td>
          <td><?php echo $npwaaa3?></td>
      </tr>
    </table>
    <h3>Menghitung CR dan membagi dengan PW</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Atlanta</th>
          <td><?php echo $craaa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $craaa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $craaa3?></td>
      </tr>
    </table>
    <h3>Menghitung LamdaMaks, CI, dan CR</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>LamdaMaks</th>
          <td><?php echo $laaa1?></td>
      </tr>
      <tr>
          <th>CI</th>
          <td><?php echo $ciaaa1?></td>
      </tr>
      <tr>
          <th>CR</th>
          <td style="background-color:Green;"><?php echo $craaa1?></td>
      </tr>
    </table>
    <!-- ...................................................... -->
    <hr></hr>
    <div class="col-md-12">

    <?php
    // Atlanta
    $aaaa1aaaa1 = 1.00;
    $aaaa1aaaa2 = 0.33;
    $aaaa1aaaa3 = 5.00;
    // Birmingham
    $aaaa2aaaa1 = 3.00;
    $aaaa2aaaa2 = 1.00;
    $aaaa2aaaa3 = 6.00;
    // Charlotte
    $aaaa3aaaa1 = 0.20;
    $aaaa3aaaa2 = 0.17;
    $aaaa3aaaa3 = 1.00;

    // jumlah
    $aaaa1 = $aaaa1aaaa1+$aaaa2aaaa1+$aaaa3aaaa1;
    $aaaa2 = $aaaa1aaaa2+$aaaa2aaaa2+$aaaa3aaaa2;
    $aaaa3 = $aaaa1aaaa3+$aaaa2aaaa3+$aaaa3aaaa3;
    ?>
    <h3>Menghitung bobot kriteria transportasi</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Transportasi</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $aaaa1aaaa1?></td>
          <td><?php echo $aaaa1aaaa2?></td>
          <td><?php echo $aaaa1aaaa3?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $aaaa2aaaa1?></td>
          <td><?php echo $aaaa2aaaa2?></td>
          <td><?php echo $aaaa2aaaa3?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $aaaa3aaaa1?></td>
          <td><?php echo $aaaa3aaaa2?></td>
          <td><?php echo $aaaa3aaaa3?></td>
      </tr>
      <tr>
          <th>Jumlah</th>
          <td><?php echo $aaaa1?></td>
          <td><?php echo $aaaa2?></td>
          <td><?php echo $aaaa3?></td>
      </tr>

      <!-- normalisasi -->
      <?php
        // atlanta
        $aaaa11 = $aaaa1aaaa1/$aaaa1;
        $aaaa12 = $aaaa1aaaa2/$aaaa2;
        $aaaa13 = $aaaa1aaaa3/$aaaa3;

        // birmingham
        $aaaa21 = $aaaa2aaaa1/$aaaa1;
        $aaaa22 = $aaaa2aaaa2/$aaaa2;
        $aaaa23 = $aaaa2aaaa3/$aaaa3;

        // charlotte
        $aaaa31 = $aaaa3aaaa1/$aaaa1;
        $aaaa32 = $aaaa3aaaa2/$aaaa2;
        $aaaa33 = $aaaa3aaaa3/$aaaa3;

        // jumlah
        $njumlahaaaa1 = $aaaa11+$aaaa12+$aaaa13;
        $njumlahaaaa2 = $aaaa21+$aaaa22+$aaaa23;
        $njumlahaaaa3 = $aaaa31+$aaaa32+$aaaa33;

        // PW
        $npwaaaa1 = $njumlahaaaa1/3;
        $npwaaaa2 = $njumlahaaaa2/3;        
        $npwaaaa3 = $njumlahaaaa3/3;        

        //CRPW
        $craaaa1 = (($aaaa1aaaa1*$npwaaaa1)+($aaaa1aaaa2*$npwaaaa2)+($aaaa1aaaa3*$npwaaaa3))/$npwaaaa1;
        $craaaa2 = (($aaaa2aaaa1*$npwaaaa1)+($aaaa2aaaa2*$npwaaaa2)+($aaaa2aaaa3*$npwaaaa3))/$npwaaaa2;
        $craaaa3 = (($aaaa3aaaa1*$npwaaaa1)+($aaaa3aaaa2*$npwaaaa2)+($aaaa3aaaa3*$npwaaaa3))/$npwaaaa3;

        //LamdaMaks, CI, CR
        $laaaa1 = ($craaaa1+$craaaa2+$craaaa3)/3;
        $ciaaaa1 = ($laaaa1-3)/(3-1);
        $craaaa1 = $ciaaaa1/0.58;
      ?>
    </table>
    <h3>Normalisasi dan menghitung PW</h3>
    <div class="container">           
    <table class="table table-bordered" border="1">
      <tr>
          <th>Transportasi</th>
          <th>Atlanta</th>
          <th>Birmingham</th>
          <th>Charlotte</th>
          <th>Jumlah</th>
          <th>PW</th>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $aaaa11?></td>
          <td><?php echo $aaaa12?></td>
          <td><?php echo $aaaa13?></td>
          <td><?php echo $njumlahaaaa1?></td>
          <td><?php echo $npwaaaa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $aaaa21?></td>
          <td><?php echo $aaaa22?></td>
          <td><?php echo $aaaa23?></td>
          <td><?php echo $njumlahaaaa2?></td>
          <td><?php echo $npwaaaa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $aaaa31?></td>
          <td><?php echo $aaaa32?></td>
          <td><?php echo $aaaa33?></td>
          <td><?php echo $njumlahaaaa3?></td>
          <td><?php echo $npwaaaa3?></td>
      </tr>
    </table>
    <h3>Menghitung CR dan membagi dengan PW</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>Atlanta</th>
          <td><?php echo $craaaa1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $craaaa2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $craaaa3?></td>
      </tr>
    </table>
    <h3>Menghitung LamdaMaks, CI, dan CR</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th>LamdaMaks</th>
          <td><?php echo $laaaa1?></td>
      </tr>
      <tr>
          <th>CI</th>
          <td><?php echo $ciaaaa1?></td>
      </tr>
      <tr>
          <th>CR</th>
          <td style="background-color:Green;"><?php echo $craaaa1?></td>
      </tr>
    </table>
    <!-- ...................................................... -->
    <hr></hr>
    <div class="col-md-12">

    <?php
    // Hasil
    $h1 = (($npwc1*$npwa1)+($npwc2*$npwaa1)+($npwc3*$npwaaa1)+($npwc4*$npwaaaa1));
    $h2 = (($npwc1*$npwa2)+($npwc2*$npwaa2)+($npwc3*$npwaaa2)+($npwc4*$npwaaaa2));
    $h3 = (($npwc1*$npwa3)+($npwc2*$npwaa3)+($npwc3*$npwaaa3)+($npwc4*$npwaaaa3));
    ?>
    <h3>Pengambilan Keputusan</h3>
    <table class="table table-bordered" border="1">
        <table class="table table-bordered" border="1">
      <tr>
          <th></th>
          <th>Pangsa Pasar</th>
          <th>Tingkat Pendapatan</th>
          <th>Infrastruktur</th>
          <th>Transportasi</th>
          <th>Hasil</th>
      </tr>
      <tr>
          <th>PW</th>
          <td><?php echo $npwc1?></td>
          <td><?php echo $npwc2?></td>
          <td><?php echo $npwc3?></td>
          <td><?php echo $npwc4?></td>
          <td></td>
      </tr>
      <tr>
          <th>Atlanta</th>
          <td><?php echo $npwa1?></td>
          <td><?php echo $npwaa1?></td>
          <td><?php echo $npwaaa1?></td>
          <td><?php echo $npwaaaa1?></td>
          <td style="background-color:Red;"><?php echo $h1?></td>
      </tr>
      <tr>
          <th>Birmingham</th>
          <td><?php echo $npwa2?></td>
          <td><?php echo $npwaa2?></td>
          <td><?php echo $npwaaa2?></td>
          <td><?php echo $npwaaaa2?></td>
          <td><?php echo $h2?></td>
      </tr>
      <tr>
          <th>Charlotte</th>
          <td><?php echo $npwa3?></td>
          <td><?php echo $npwaa3?></td>
          <td><?php echo $npwaaa3?></td>
          <td><?php echo $npwaaaa3?></td>
          <td><?php echo $h3?></td>
      </tr>
    </table>
</table>      