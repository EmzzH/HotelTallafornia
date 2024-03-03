<?php
namespace src\user;

class User {
    protected $userId;
    protected $name;
    protected $dob;
    protected $address;
    protected $phno;
    
    public function __construct($userId, $name, $dob, $address, $phno) {
        $this->userId = $userId;
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->phno = $phno;
        
    }
    
    //this is the array that will be called to get passed into the DB
    public function userArray(){
        return [
            'user_id' => $this->userId,
            'name' => $this->name,
            'address' => $this->address,
            'ph_no' => $this->phno,
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
        return $this->phno;
    }
    
    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
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
     * @param mixed $phno
     */
    public function setPhno($phno)
    {
        $this->phno = $phno;
    }
    
    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
    
    
}

