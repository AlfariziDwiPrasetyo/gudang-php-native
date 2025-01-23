<?php
include_once('../models/TransaksiModel.php');

class TransaksiController
{
    private $model;

    public function __construct()
    {
        $this->model = new TransaksiModel();
    }

    public function addTransaksi($kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at)
    {
        return $this->model->addTransaksi($kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at);
    }

    public function getTransaksi($id)
    {
        return $this->model->getTransaksi($id);
    }

    public function Show($id)
    {
        $rows = $this->model->getTransaksi($id);
        foreach($rows as $row){
            $val = $row['nama'];
        }
        return $val;
    }

    public function updateTransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at)
    {
        return $this->model->updateTransaksi($id, $kode_transaksi, $kode_barang, $kode_pemasok, $jumlah, $jenis_transaksi, $tanggal, $created_at, $updated_at);
    }

    public function deleteTransaksi($id)
    {
        return $this->model->deleteTransaksi($id);
    }

    public function getTransaksiList()
    {
        return $this->model->getTransaksiList();
    }
    
    public function getDataCombo()
    {
        return $this->model->getDataCombo();
    }
}
