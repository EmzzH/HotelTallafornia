<?php

namespace src\user;

use src\database\Database;
class User
{
    protected $user_id;
    protected $name;
    protected $dob;
    protected $address;
    protected $ph_no;


//    public function __construct($userId, $name, $dob, $address, $ph_no)
//    {
//        $this->user_id = $userId;
//        $this->name = $name;
//        $this->dob = $dob;
//        $this->address = $address;
//        $this->ph_no = $ph_no;
//
//    }

    public function __construct( $name, $dob, $address, $ph_no)
    {
//        $this->user_id = $userId;
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->ph_no = $ph_no;

    }

    //this is the array that will be called to get passed into the DB
    public function userArray()
    {
        global $connection;
        return [
            'user_id' => $this->getUserId(),
            'name' => $this->name,
            'address' => $this->address,
            'ph_no' => $this->ph_no,
            'dob' => $this->dob,
        ];
    }


    public function getName()
    {
        return $this->name;
    }

    public function getDob()
    {
        return $this->dob;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function getPhno()
    {
        return $this->ph_no;
    }


    public function getUserId()
    {
        return $this->user_id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function setPhno($ph_no)
    {
        $this->ph_no = $ph_no;
    }


    public function setUserId($user_id)
    {
        require_once('../../config.php');
        $connection = new PDO($dsn, $username, $password, $options);
        $this->user_id = Database::getKey($connection, "user", "user_id");
    }
}

