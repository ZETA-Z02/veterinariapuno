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
            $fechaend = strtotime('+2 hour',strtotime($row['hora']));
            $json[] = array(
                'title' => ($row['estado']==1)?'Atendido':'Reservado',
                'start' => $row['fecha'].'T'.$row['hora'],
                'end'   => $row['fecha'].'T'.date('H:i:s', $fechaend),
                'borderColor' => ($row['estado']==1)?'red':'green',
                'backgroundColor' => ($row['estado']==1)?'red':'green',
                'textColor' => '#ffffff'
            );
        }
        echo json_encode($json);
    }
}
