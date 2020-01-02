<?php
include 'conn.php';

class baru extends database{
    function tampil_karyawan()
    {
        $data = $this->connection->query("SELECT * FROM karyawan");
        while ($row = $data->fetch_array()) {
            $hasil[] = $row;
        }
        return $hasil;
    }

    function tambah_karyawan($nmKaryawan, $tglLahir, $telp, $alamat)
    {
        $this->connection->query("INSERT INTO karyawan VALUES('','$nmKaryawan','$tglLahir','$telp','$alamat')");
    }

    function hapus_karyawan($id)
    {
        $this->connection->query("DELETE FROM karyawan WHERE idKaryawan = '$id'");
    }

    function get_by_idkaryawan($id)
    {
        $query = $this->connection->query("SELECT * FROM karyawan WHERE idKaryawan = '$id'");
        return $query->fetch_array();
    }

    function perbarui_karyawan($idKaryawan, $nmKaryawan, $tglLahir, $telp, $alamat)
    {
        $this->connection->query("UPDATE karyawan set nmKaryawan =  '$nmKaryawan',tglLahir =  '$tglLahir',telp =  '$telp',alamat =  '$alamat' WHERE idKaryawan =  '$idKaryawan'");
    }
}

?>