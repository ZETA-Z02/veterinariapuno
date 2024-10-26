<?php 
class MainModel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function Get(){
        $sql = "SELECT * FROM citas";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
}