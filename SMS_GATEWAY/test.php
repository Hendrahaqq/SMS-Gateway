<?php
include "config.php";

$noreg = 'PA0033';
$tgl_ubah = '2018-07-02';
$poli = 'klinik bedah';

$status = mysql_query("select * from m_jadwal_praktek_antrian as a join m_jadwal_praktek as b on a.jadwal_praktek_fk = b.pk join m_pelayanan as c on b.pelayanan_fk = c.pk where a.nomor_registrasi_pasien = '$noreg' and b.tanggal_praktek = '$tgl_ubah' and c.nama_pelayanan = '$poli'");

$status1 = mysql_fetch_row($status);
	
if ($status1 > 0 ){
        echo 1;
} else
  echo 0;
?>