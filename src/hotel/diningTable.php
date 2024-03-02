<?php
namespace hotel;

class diningTable{

    private $capacity;
    private $table_no;

    
    public function __construct($table_no, $capacity)
    {
        $this->capacity = $capacity;
        $this->table_no = $table_no; 
     
    }
    
    public function diningTableArray(){
        return [
            'table_no' => $this->table_no,
            'capacity' => $this->capacity,     
            
        ];
    }
    /**
     * @return mixed
     */
    public function getTable_no()
    {
        return $this->table_no;
    }

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }


    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

}


?>



 
    