<?php
class Main extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('main/index');
	}
	public function Get(){
        $data = $this->model->Get();
        while($row = mysqli_fetch_array($data)){
            $fechaend = strtotime('+1 hour',strtotime($row['hora']));
            $json[] = array(
                'title' => ($row['estado']==1)?'Atendido':':00 Reservado',
                'start' => $row['fecha'].'T'.$row['hora'],
                'end'   => $row['fecha'].'T'.date('H:i:s', $fechaend),
                'borderColor' => ($row['estado']==1)?'red':'green',
                'backgroundColor' => ($row['estado']==1)?'red':'green',
                'textColor' => '#ffffff'
            );
        }
        echo json_encode($json);
    }
    public function reservar(){
        $dni = $_POST['dni'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $mascota = $_POST['mascota'];
        $especie = $_POST['especie'];
        $raza = $_POST['raza'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora']; 
        $id = null;
        if($this->model->GetCliente($dni)){
            $data = $this->model->GetCliente($dni);
            $id = $data['idcliente'];
        }        
        if($this->model->Reservar($dni,$nombre,$apellido,$telefono,$mascota,$especie,$raza,$fecha,$hora,id:$id)){
            echo "SUCCES POST";
        }else{
            echo "ERROR";
        }
    }
    public function getHora(){
        $fecha = $_POST['fecha'];
        $data = $this->model->GetHora($fecha);
        $horas = array('10:00:00','11:00:00','14:00:00','15:00:00');
        while($row = mysqli_fetch_array($data)){
            if(in_array($row['hora'], $horas)){
                unset($horas[array_search($row['hora'], $horas)]);
            }
        }
        echo json_encode($horas);
    }
    public function dni()
    {
        // Datos
        $token = 'apis-token-8574.bPsef4wHOYjVwA7bFoDMZqLLrNrAMKiY';
        $dni = $_POST["dni"];
        // Iniciar llamada a API
        $curl = curl_init();
        // Buscar dni
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $dni,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 2,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Referer: https://apis.net.pe/consulta-dni-api',
                    'Authorization: Bearer ' . $token
                ),
            )
        );
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            echo 'error del scraper: ' . curl_error($curl);
            exit;
        }
        curl_close($curl);
        // Datos listos para usar
        echo $response;


    }
}
