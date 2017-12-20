<?php
	class todoTask {
		public static function getTasks(){
			$db = Database :: getDB();
			$query = 'SELECT * FROM bl54.todos';
			$statement -> execute();
			$results = $statement -> fetchALL();
			$statement -> closeCursor();

			$task = array();

			foreach($results as $row){
				$task[] = new Task($row['id'], $row['owneremail'], $row['ownerid'], $row['createddate'], $row['duedate'], $row['message'], $row['isdone']);

				
			}

			function addTask ($id, $owneremail, $ownerid, $createddate, $duedate, $message, $isdone){
				$db = Database :: getDB();
				$query = 'INSERT INTO bl54.todos 
							(id, owneremail, ownerid, createddate, duedate, message, isdone)
							VALUES 
							(:id, :owneremail, :ownerid, :createddate, :duedate, :message, :isdone)';
				$statement = $db->prepare($query);
				$statement ->bindValue(':id', $id);
				$statement ->bindValue(':owneremail', $owneremail);
				$statement ->bindValue(':ownerid', $ownerid);
				$statement ->bindValue(':createddate', $createddate);
				$statement ->bindValue(':duedate', $duedate);
				$statement ->bindValue(':message', $message);
				$statement ->bindValue(':isdone', $isdone);
				$statement ->execute();
				$statement ->closeCursor();

			return $task;

			}


			
		}
	}