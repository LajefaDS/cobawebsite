<?php
include "../portofolio3.html";
?>
<?php
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    switch($cari){
        case 'foto';
        include "../foto.html";
        break;
        case 'nib';
        include "../nib.html";
        break;
        case 'dmc';
        include "../dmc.html";
        break;
        case 'excel';
        include "../excel.html";
        break;
        case 'produk';
        include "../produk.html";
        break;
        default:
        echo "Halaman Tidak Tersedia";
        break;
    }
}else{
    include "../foto.html";
}
?>
<?php
include "../kontak.html";
?>