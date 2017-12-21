<?php

	class UsersDB {
        public static function getUsers(){
            $db = Database :: getDB();
            $query = 'SELECT * FROM bl54.accounts';
            $statement = $db->prepare($query);
            $statement -> execute();
            $results = $statement -> fetchAll();
            $statement -> closeCursor();

            $users = array();

            foreach($results as $row){
                $users[] = new User($row['id'], $row['email'], $row['fname'], $row['lname'], $row['phone'], $row['birthday'], $row['gender'], $row['password'] );

            }

        }

        public static function addUsers($fname, $lname, $email, $phone, $bday, $gender){
        	$db = Database :: getDB();
        	$query = 'INSERT INTO bl54.accounts
        				(fname, lname, email, phone, bday, gender)
        				VALUES 
        				(:fname, :lname, :email, :phone, :bday, :gender)';
        	$statement = $db->prepare($query);
        	$statement ->bindValue(':fname', $fname);
        	$statement ->bindValue(':lname', $lname);
        	$statement ->bindValue(':email', $email);
        	$statement ->bindValue(':phone', $phone);
        	$statement ->bindValue(':bday', $bday);
        	$statement ->bindValue(':gender', $gender);
        	$statement ->execute();
        	$statement ->closeCursor();
        	

        }


            return $users;
            

	}

?>