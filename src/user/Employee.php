<?php
namespace src\user;

class Employee extends User
{
    protected $employee_id;
    protected $job;
    /**
     * @return mixed
     */
    public function __construct($userId, $name, $dob, $address, $ph_no, $employee_id, $job) {
        parent ::__construct($userId, $name, $dob, $address, $ph_no);
        $this->employee_id = $employee_id;
        $this->job = $job;
              
    
    }
    //this is the array that will be called to get passed into the DB
    public function employeeArray(){
        return [      
            'employee_id' => $this->employee_id,
            'job' => $this->job,
            //this is how to pull the correct key w/o having to query the DB as it gets it directly from the User class
            'user_id'=> $this->getUserId()    
        ];
    }
    
    public function getEmployeeid()
    {
        return $this->employee_id;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $employee_id
     */
    public function setEmployeeid($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    
    
    
    
    }
    


