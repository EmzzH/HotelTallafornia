<?php
namespace Hotel;

class Room
{
    private $room_id;
    private $type;
    private $accessibility;
    private $price;
    
    
    public function __construct($room_id, $type, $accessibility, $price)
    {
        $this->room_id = $room_id;
        $this->type = $type;
        $this -> accessibility = $accessibility;
        $this -> price = $price;
    }
    
    public function roomArray(){
        return [
            'room_no' => $this->room_id,
            'type' => $this->type,
            'accessibility' => $this->accessibility,
            'price' => $this->price,
            
        ];
    }
    
    /**
     * @return mixed
     */
    public function getRoom_id()
    {
        return $this->room_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getAccessibility()
    {
        return $this->accessibility;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $room_id
     */
    public function setRoom_id($room_id)
    {
        $this->room_id = $room_id;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $accessibility
     */
    public function setAccessibility($accessibility)
    {
        $this->accessibility = $accessibility;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    
    
    
}

?>