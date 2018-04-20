<?php 

	class Skills{
		private $table;
		private $error;
		public $result = "";

		public function insertContent($dbcon, $table, $expertise, $rating ){
				$this->table=$table;
			$stat=$dbcon->prepare("INSERT INTO $this->table(skill, value, date_created) VALUES(:s, :v, NOW())");
			$data=[
				':s' => $expertise,
				':v' => $rating,
			];
			$stat->execute($data);
		}

		public function error($err, $name){
			if (isset($err[$name])){
      			$this->result = '<span class="err">'.$err[$name].'</span>';

    		}
			return $this->result;
		}
		public function insertAboutContent($dbcon, $table, $about_me){
				$this->table=$table;
			$stat=$dbcon->prepare("INSERT INTO $this->table(about, date_created) VALUES(:a, NOW())");
			$stat->bindParam(':a', $about_me);
			$stat->execute();
		}

	}










 ?>