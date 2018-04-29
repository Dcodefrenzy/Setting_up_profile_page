<?php

	class view{
		public $result;
		public $statement;

		public function selectFromDb($stat, $table){
			

				$query = sprintf(

					"SELECT * FROM %s",
					$table
				);

			try{
					$this->statement = $stat->prepare($query);

					 $this->statement->execute();
					
			}catch (Exception $exception){
					die("whoops Something went wrong");
			}

			return $this->statement;					

		}


		public function about(){
			$this->result = $this->statement-> fetch(PDO::FETCH_BOTH);

			return $this->result;
		}


		public function education(){
		
			while($row = $this->statement->fetch(PDO::FETCH_BOTH)  ){
				$this->result .='<tbody><tr><td>'.$row[1].'</td>';
				$this->result .=	'<td>' .$row[2]. '</td>';
				$this->result .=	'<td>' .$row[3]. '</td>';
				$this->result .=	'<td>'   .$row[4]. '</td>';
				$this->result .=	'<td><a href= "edit_about.php?id='.$row[0].'">edit</a> </td>';
				$this->result .=	'<td>  <a href= "delete_about.php?id='.$row[0].'">delete</a> </td>';
					'</tr>
					</tbody>';
			}
			return $this->result;
		}
		public function services(){
		
			while($row = $this->statement->fetch(PDO::FETCH_BOTH)  ){
				$this->result .='<tbody><tr><td>'.$row[1].'</td>';
				$this->result .=	'<td>' .$row[2]. '</td>';
				$this->result .=	'<td>' .$row[3]. '</td>';
				$this->result .=	'<td><a href= "edit_about.php?id='.$row[0].'">edit</a> </td>';
				$this->result .=	'<td>  <a href= "delete_about.php?id='.$row[0].'">delete</a> </td>';
					'</tr>
					</tbody>';
			}
			return $this->result;
		}
		public function skills(){
		
			while($row = $this->statement->fetch(PDO::FETCH_BOTH)  ){
				$this->result .='<tbody><tr><td>'.$row[1].'</td>';
				$this->result .=	'<td>' .$row[2]. '</td>';
				$this->result .=	'<td>' .$row[3]. '</td>';
				$this->result .=	'<td><a href= "edit_about.php?id='.$row[0].'">edit</a> </td>';
				$this->result .=	'<td>  <a href= "delete_about.php?id='.$row[0].'">delete</a> </td>';
					'</tr>
					</tbody>';
			}
			return $this->result;
		}
		public function works(){
		
			while($row = $this->statement->fetch(PDO::FETCH_BOTH)  ){
				$this->result .='<tbody><tr><td>'.$row[1].'</td>';
				$this->result .=	'<td>' .$row[2]. '</td>';
				$this->result .=	'<td><div style="width:50px; height:50px; 
										background-image:url('.$row[3].'); 
										background-size:cover;
										background-repeat:no-repeat; 
										background-position:center"></div></td>';
				$this->result .=	'<td><a href= "edit_about.php?id='.$row[0].'">edit</a> </td>';
				$this->result .=	'<td>  <a href= "delete_about.php?id='.$row[0].'">delete</a> </td>';
					'</tr>
					</tbody>';
			}
			return $this->result;
		}
	}





?>
