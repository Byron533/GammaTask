<?php
require('model/usersdb.php');
require('model/DBclass.php');
require('model/userclass.php');
require('model/todoTask.php');


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
    $fname = filter_input(INPUT_POST, 'fname');
    $lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $bday = filter_input(INPUT_POST, 'bday');
    $gender = filter_input(INPUT_POST, 'gender');

     UsersDB::addUsers($fname, $lname, $email, $phone, $bday, $gender);

    header("Location: .?action=task_list.php");
}
   
    
        if ($action == 'task_list.php'){
        	include('todoTask.php');
        } else if ($action == 'submit_task'){
        	$owneremail = filter_input(INPUT_POST, 'owneremail');
			$ownerid = filter_input(INPUT_POST, 'ownerid');
			$createddate = filter_input(INPUT_POST, 'createddate');
			$duedate = filter_input(INPUT_POST, 'duedate');
			$message = filter_input(INPUT_POST, 'message');

			todoTask::addTask($id, $owneremail, $ownerid, $createddate, $duedate, $message, $isdone);

			header("Location: .?action=task_list.php");

        }




?>  