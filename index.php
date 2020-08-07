<?php

$Jelajah_Web = new Jelajah_Web('Menambah referensi melalui E-Lib UNIKOM','http://elib.unikom.ac.id');
$Tandai_Web = new Tandai_Web($Jelajah_Web);

echo'Judul Website : '.$Jelajah_Web->ambil_judul();
echo '<br>';
echo'Alamat Link : '.$Jelajah_Web->ambil_link_url();
echo '<br><br>';

$Tandai_Web->set_judul($Jelajah_Web);

$Jelajah_Web->set_link_url("https://elib.unikom.ac.id/gdl.php?mod=browse&op=read&id=jbptunikompp-gdl-muhammadsa-36762&q=crm");
echo'Link Profil: '.$Jelajah_Web->ambil_link_url();
echo '<br><br>';

$Jelajah_Web->set_link_url("https://elib.unikom.ac.id/gdl.php?mod=browse&op=read&id=jbptunikompp-gdl-muhammadsa-36762&q=crm");
echo'Link Sahabat : '.$Jelajah_Web->ambil_link_url();
echo '<br><br>';

$Tandai_Web->ambil_link_url($Jelajah_Web);
echo'Kembali ke Link Awal : '.$Jelajah_Web->ambil_link_url();
echo '<br><br>';

?>