<?php

class User {
        private $id;
        private $email;
        private $fname;
        private $lname;
        private $phone;
        private $birthday;
        private $gender;
        private $password;

        public function __construct($id, $email, $fname, $lname, $phone, $birthday, $gender, $password){
            $this->id = $id;
            $this->email = $email;
            $this->fname = $fname;
            $this->lname = $lname;
            $this->phone = $phone;
            $this->birthday = $birthday;
            $this->gender = $gender;
            $this->password = $password;
        }
          public function getid (){
            return $this->id;
        }
        public function setid($value){
            $this ->id = $value;
        }

        public function getEmail (){
            return $this->email;
        }
        public function setEmail($value){
            $this ->email = $value;
        }

        public function getFname (){
            return $this->fname;
        }
        public function setFname($value){
            $this ->fname = $value;
        }

        public function getLname (){
            return $this->lname;
        }
        public function setLname($value){
            $this ->lname = $value;
        }

        public function getPhone (){
            return $this->phone;
        }
        public function setPhone($value){
            $this ->phone = $value;
        }

        public function getBirthday (){
            return $this->birthday;
        }
        public function setBirthday($value){
            $this ->birthday = $value;
        }

        public function getGender (){
            return $this->gender;
        }
        public function setGender($value){
            $this ->gender = $value;
        }

        public function getPassword (){
            return $this->password;
        }
        public function setPassword ($value){
            $this ->password = $value;
        }


    }

        ?>
