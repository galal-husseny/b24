<?php

// caclucate area of different shapes ? 

interface shape {
    function area() :float;
}

class square implements shape {
    private $width;
    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    public function area() :float
    {
        return $this->width ** 2;
    }
}

class rect implements shape {
    private $width,$length;
    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */ 
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    public function area() :float
    {
        return $this->width * $this->length;
    }
}

class circle implements shape {
    private $raduis;
    /**
     * Get the value of raduis
     */ 
    public function getRaduis()
    {
        return $this->raduis;
    }

    /**
     * Set the value of raduis
     *
     * @return  self
     */ 
    public function setRaduis($raduis)
    {
        $this->raduis = $raduis;

        return $this;
    }

    public function area() :float
    {
        return ($this->raduis ** 2) * pi();
    }
}

// $circle = new circle;
// $circle->setRaduis(5);
// echo $circle->area();