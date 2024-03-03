<?php
namespace src\user;

class Employee extends User
{
    protected $employeeid;
    protected $job;
    /**
     * @return mixed
     */
    public function __construct($userId, $name, $dob, $address, $phno,$employeeid, $job) {
        parent ::__construct($userId, $name, $dob, $address, $phno);
        $this->employeeid = $employeeid;
        $this->job = $job;
              
    
    }
    //this is the array that will be called to get passed into the DB
    public function employeeArray(){
        return [      
            'employee_id' => $this->employeeid,
            'job' => $this->job,
            //this is how to pull the correct key w/o having to query the DB as it gets it directly from the User class
            'user_id'=> $this->getUserId()    
        ];
    }
    
    public function getEmployeeid()
    {
        return $this->employeeid;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $employeeid
     */
    public function setEmployeeid($employeeid)
    {
        $this->employeeid = $employeeid;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    
    
    
    
    }
    


