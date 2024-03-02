<?php
namespace hotel;

class diningTable{

    private $capacity;
    private $table_id;

    
    public function __construct($table_no, $capacity)
    {
        $this->capacity = $capacity;
        $this->table_id = $table_no;
     
    }
    
    public function diningTableArray(){
        return [
            'table_no' => $this->table_id,
            'capacity' => $this->capacity,     
            
        ];
    }
    /**
     * @return mixed
     */
    public function getTable_id()
    {
        return $this->table_id;
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



 
    