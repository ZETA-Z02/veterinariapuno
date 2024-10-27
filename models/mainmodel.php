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
    public function GetCliente($dni){
        $sql = "SELECT idcliente FROM cliente WHERE dni = '$dni';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
    public function Reservar($dni,$nombre,$apellido,$telefono,$mascota,$especie,$raza,$fecha,$hora,$id=null){
        $this->conn->conn->begin_transaction();
        try{
            if($id==null){
                $sqlcliente = "INSERT INTO cliente VALUES(null,'$nombre','$apellido','$dni','$telefono');";
                $response = $this->conn->ConsultaSin($sqlcliente);
                $idcliente = $this->conn->conn->insert_id;
                $sqlmascota = "INSERT INTO mascota VALUES(null,'$idcliente','$mascota','$especie','$raza');";
                $response1 = $this->conn->ConsultaSin($sqlmascota);
                $idmascota = $this->conn->conn->insert_id;
                $sqlcita = "INSERT INTO citas (idcliente,idmascota,fecha,hora) VALUES('$idcliente','$idmascota','$fecha','$hora');";
                $response2 = $this->conn->ConsultaSin($sqlcita);
            }else{
                $sqlmascota = "INSERT INTO mascota VALUES(null,'$id','$mascota','$especie','$raza');";
                $response = $this->conn->ConsultaSin($sqlmascota);
                $idmascota = $this->conn->conn->insert_id;
                $sqlcita = "INSERT INTO citas (idcliente,idmascota,fecha,hora) VALUES('$id','$idmascota','$fecha','$hora');";
                $response1 = $this->conn->ConsultaSin($sqlcita);
            }
            $this->conn->conn->commit();
            $this->conn->conn->close();
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
            $this->conn->conn->rollback();
            $this->conn->conn->close();
            return false;
        }
    }
}