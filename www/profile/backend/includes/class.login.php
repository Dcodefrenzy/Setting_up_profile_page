<?php 

class LoginAdmin{
		
		public $result = [];


		public function Login($dbcon,  $mail, $password){
			
			
			$stat=$dbcon->prepare("SELECT * FROM  login WHERE :e = email && :p= hash");
			$stat->bindParam(':e', $mail);
			$stat->bindParam(':p', $password);
			$stat->execute();

			$array = $stat->fetch(PDO::FETCH_BOTH);
			$count = $stat->rowCount();
			if(!$count == 1 ){
				$this->result[] = false;
			} else{
				$this->result[] = true;
				$this->result []= $array;
				}
			return $this->result;
			
		}

		public function Error(){
 			$result= "";
    		if (isset($err[$name])){
      		$result = '<span class="err">'.$err[$name].'</span>';

    		}
			return $result;
		}

	}



 ?>