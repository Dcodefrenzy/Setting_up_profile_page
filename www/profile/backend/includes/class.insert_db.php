<?php 

	class Skills{
		private $table;
		private $error;
		public $result;

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
		public function insertEducationContent($dbcon, $table, $school_atended, $degree_recived, $start, $end){
				$this->table=$table;
			$stat=$dbcon->prepare("INSERT INTO $this->table(school, degree, start_year, end_year) 
				VALUES(:sc, :de, :st, :en)");
			$data=[
				':sc' => $school_atended,
				':de' => $degree_recived,
				':st' => $start,
				':en' => $end,			
			];
			$stat->execute($data);

		}
		public function insertEducation($dbcon, $table, $school_atended, $degree_recived, $start, $end){
				$this->table=$table;
			$stat=$dbcon->prepare("INSERT INTO $this->table(school, degree, start_year, end_year) 
				VALUES(:sc, :de, :st, :en)");
			$data=[
				':sc' => $school_atended,
				':de' => $degree_recived,
				':st' => $start,
				':en' => $end,			
			];
			$stat->execute($data);

		}		

	}










 ?>