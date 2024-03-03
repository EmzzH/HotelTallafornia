<?php

namespace src\user;

class User
{
    protected $user_id;
    protected $name;
    protected $dob;
    protected $address;
    protected $ph_no;

    public function __construct($userId, $name, $dob, $address, $ph_no)
    {
        $this->user_id = $userId;
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->ph_no = $ph_no;

    }

    //this is the array that will be called to get passed into the DB
    public function userArray()
    {
        return [
            'user_id' => $this->user_id,
            'name' => $this->name,
            'address' => $this->address,
            'ph_no' => $this->ph_no,
            'dob' => $this->dob,


        ];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getPhno()
    {
        return $this->ph_no;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $ph_no
     */
    public function setPhno($ph_no)
    {
        $this->ph_no = $ph_no;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


}

