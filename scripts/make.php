<?php
	include 'connect.php';
	class GetData{

		public $query = '';
		public $database = '';
		public $responde = array();

		public function init($data){
			$this->query = $data;
			$this->parseData();
		}

		public function parseData(){
			foreach ($this->query as $key ) {
				$this->choseQuery($key);
			}
			$this->sendData(); // send data to client
		}

		public function choseQuery($name){
			switch ($name) {
				case 'Leon_Years': // Âîçðàñò ïîêóïàòåëåé New Leon
					$this->LeonYears();
					break;
				case 'Leon_Years_by_model': // Âîçðàñò ïîêóïàòåëåé New Leon ïî ìîäåëÿì (New Leon, New Leon SC, New Leon ST)
					$this->LeonYearsByModel(); 
					break;
			}
		}

		public function LeonYears() { // Âîçðàñò ïîêóïàòåëåé New Leon
			$query = "SELECT age
					  FROM form
					  WHERE engine_type LIKE '%NEW LEON%'";

			$result = mysql_query($query);
			$LeonYears = array();

			while ($data = mysql_fetch_assoc($result)) {
				array_push($LeonYears, $data['age']);
			}
			$this->responde['Leon_Years'] = $LeonYears; // add to result
		} 

		public function LeonYearsByModel(){ // Âîçðàñò ïîêóïàòåëåé New Leon ïî ìîäåëÿì (New Leon, New Leon SC, New Leon ST)
			$LeonYearsByModel = array('NEW LEON' => array(), 'NEW LEON ST' => array(), 'NEW LEON SC' => array() );
			$names = array_keys($LeonYearsByModel);
			foreach ($names as $key ) { // make query with all models
				$query = "SELECT age
						 FROM form
						 WHERE  engine_type = '$key'";
				$result = mysql_query($query);

				while ($data = mysql_fetch_assoc($result)) {
					array_push($LeonYearsByModel[$key], $data['age']); 
				}
			}

			$this->responde['Leon_Years_By_Model'] = $LeonYearsByModel; // add to result
		}

		public function sendData(){
			$res = json_encode($this->responde);
			echo $res;
		}

	}


	if( isset($_GET['data']) ){
		$getData = new GetData();
		$getData->init($_GET['data']);
	}

?>