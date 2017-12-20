<?php
require('model/usersdb.php');
require('model/DBclass.php');
require('model/userclass.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'signup.html';
    }
}
if ($action == 'signup.html') {
    include('signup.php');
} else if ($action == 'submit_signup') {
    $fname = filter_input(INPUT_POST, 'fname',
                FILTER_VALIDATE_INT);
    $lname = filter_input(INPUT_POST, 'lname',
                FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email',
                FILTER_VALIDATE_INT);
    $phone = filter_input(INPUT_POST, 'phone',
                FILTER_VALIDATE_INT);
    $bday = filter_input(INPUT_POST, 'bday',
                FILTER_VALIDATE_INT);
    $gender = filter_input(INPUT_POST, 'gender',
                FILTER_VALIDATE_INT);

     UsersDB::addUsers($fname, $lname, $email, $phone, $bday, $gender);

     header("Location: .?action=task_list");
}
   
    
        if ($action == 'todoTask.php'){
        	include('task_list.php');
        } else if ($action == 'submit_task'){
        	$owneremail = filter_input(INPUT_POST, 'owneremail');
			$ownerid = filter_input(INPUT_POST, 'ownerid');
			$createddate = filter_input(INPUT_POST, 'createddate');
			$duedate = filter_input(INPUT_POST, 'duedate');
			$message = filter_input(INPUT_POST, 'message');

			todoTask::addTask($id, $owneremail, $ownerid, $createddate, $duedate, $message, $isdone);

			header("Location: .?action=task_list");

        }




?>  