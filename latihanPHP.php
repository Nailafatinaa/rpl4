<?php
function biodata(){
    echo "Nama = Naila Fatina";
    echo "<br>";
    echo "Kelas = R4";
    echo "<br>";
    echo "Alamat = Malang";
    echo"<br>"; 
}

function luas(){
    $y= 6;
    $x=4;
    $hasil = $y*$x;

    echo "hasil = "+ $hasil;
    echo "<br>"

}
//pil. 1 = biodata, pil. 2 = luas

$pilihan = 1;

    if($pilihan =1){
        biodata();
    }else if($pilihan= 2){
        luas();
    }else{
        echo "-";
    
    }
?>
