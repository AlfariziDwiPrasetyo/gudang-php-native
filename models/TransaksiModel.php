<?php

include_once('../db/database.php');

class TransaksiModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addTransaksi($kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at)
    {
        $sql = "INSERT INTO transaksi (kode_transaksi, kode_barang, kode_pemasok, jumlah, jenis_transaksi, tanggal, created_at, updated_at) VALUES (:kode_transaksi, :kode_barang, :kode_pemasok, :jumlah, :jenis_transaksi, :tanggal, :created_at, :updated_at)";
        $params = array(
          ":kode_transaksi" => $kode_transaksi,
          ":kode_barang" => $kode_barang,
          ":kode_pemasok" => $kode_pemasok,
          ":jumlah" => $jumlah,
          ":jenis_transaksi" => $jenis_transaksi,
          ":tanggal" => $tanggal,
          ":created_at" => $created_at,
          ":updated_at" => $updated_at
        );

        $result= $this->db->executeQuery($sql, $params);
        // Check if the insert was successful
        if ($result) {
            $response = array(
                "success" => true,
                "message" => "Insert successful"
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Insert failed"
            );
        }
    
        // Return the response as JSON
        return json_encode($response);
    }

    public function getTransaksi($id)
    {
        $sql = "SELECT * FROM transaksi WHERE id = :id";
        $params = array(":id" => $id);

        return $this->db->executeQuery($sql, $params)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateTransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at)
    {
        $sql = "UPDATE transaksi SET kode_transaksi = :kode_transaksi, kode_barang = :kode_barang, kode_pemasok = :kode_pemasok, jumlah = :jumlah, jenis_transaksi = :jenis_transaksi, tanggal = :tanggal, created_at = :created_at, updated_at = :updated_at WHERE id = :id";
        $params = array(
          ":kode_transaksi" => $kode_transaksi,
          ":kode_barang" => $kode_barang,
          ":kode_pemasok" => $kode_pemasok,
          ":jumlah" => $jumlah,
          ":jenis_transaksi" => $jenis_transaksi,
          ":tanggal" => $tanggal,
          ":created_at" => $created_at,
          ":updated_at" => $updated_at,
          ":id" => $id
        );
    
        // Execute the query
        $result = $this->db->executeQuery($sql, $params);
    
        // Check if the update was successful
        if ($result) {
            $response = array(
                "success" => true,
                "message" => "Update successful"
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Update failed"
            );
        }
    
        // Return the response as JSON
        return json_encode($response);
    }
    

    public function deleteTransaksi($id)
    {
        $sql = "DELETE FROM transaksi WHERE id = :id";
        $params = array(":id" => $id);

        $result = $this->db->executeQuery($sql, $params);
        // Check if the delete was successful
        if ($result) {
            $response = array(
                "success" => true,
                "message" => "Delete successful"
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Delete failed"
            );
        }
    
        // Return the response as JSON
        return json_encode($response);
    }

    public function getTransaksiList()
    {
        $sql = 'SELECT * FROM transaksi limit 100';
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataCombo()
    {
        $sql = 'SELECT * FROM transaksi';
        $data = array();
        $data = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
