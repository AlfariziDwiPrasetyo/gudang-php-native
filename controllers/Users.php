<?php
include_once('../models/UsersModel.php');

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function addUsers($nama, $email, $sandi, $level)
    {
        return $this->model->addUsers($nama, $email, $sandi, $level);
    }

    public function getUsers($id)
    {
        return $this->model->getUsers($id);
    }

    public function Show($id)
    {
        $rows = $this->model->getUsers($id);
        foreach($rows as $row){
            $val = $row['nama'];
        }
        return $val;
    }

    public function updateUsers($id, $nama, $email, $sandi, $level)
    {
        return $this->model->updateUsers($id, $nama, $email, $sandi, $level);
    }

    public function deleteUsers($id)
    {
        return $this->model->deleteUsers($id);
    }

    public function getUsersList()
    {
        return $this->model->getUsersList();
    }
    
    public function getDataCombo()
    {
        return $this->model->getDataCombo();
    }
}
