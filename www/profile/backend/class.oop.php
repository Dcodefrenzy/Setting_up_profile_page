<?php
  
	class Skills{
			public $result;


		public function insertExperience($stat, $table, $info){

			array_pop($info);
			$query = sprintf(
			'Insert INTO %s (%s) VALUES(%s)',
			$table,
			implode(', ', array_keys($info)),
			":".implode(', :', array_keys($info))

			);
			var_dump($query);
			try{
			$statment = $stat->prepare($query);

			$statment->execute($info);

			}catch (Exception $exception){
			die("whoops Something went wrong");
		}
	}
	public function error($err, $name){
			if (isset($err[$name])){
      			$this->result = '<span class="err">'.$err[$name].'</span>';

    		}
			return $this->result;
		}
	


}

  ?>