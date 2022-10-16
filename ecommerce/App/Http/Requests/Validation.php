<?php
namespace App\Http\Requests;

class Validation {
    private string $input; // 
    private string $inputName; // 
    private array $errors = [];
    public function required() :self
    {
        if(empty($this->input)){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} is required";
        }
        return $this;
    }
    public function string() :self
    {
        if(! is_string($this->input)){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} must be string";
        }
        return $this;
    }

    public function between(int $min,int $max) :self
    {
        if(! (strlen($this->input) >= $min && strlen($this->input) <= $max)){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} must be between {$min} , {$max}";
        }
        return $this;
    }

    public function regex(string $pattern,$message=null)  :self
    {
        if(! preg_match($pattern,$this->input)){
            $this->errors[$this->inputName][__FUNCTION__] = $message ?? "{$this->inputName} invalid";
        }
        return $this;
    }

    public function unique()  :self
    {
        // database
        return $this;
    }
    public function exists()  :self
    {
        // database
         return $this;
    }

    public function confirmed($password_confirmation) :self
    {
        if($this->input !== $password_confirmation){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} not confirmed";
        }
        return $this;
    }
    public function in(array $values)  :self
    {
        if(! in_array($this->input,$values)){
            $this->errors[$this->inputName][__FUNCTION__] = "{$this->inputName} accepted values " . implode(', ',$values);
        }
        return $this;
    }

    /**
     * Set the value of input
     *
     * @return  self
     */ 
    public function setInput($input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Set the value of inputName
     *
     * @return  self
     */ 
    public function setInputName($inputName)
    {
        $this->inputName = $inputName;

        return $this;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors()
    {
        return $this->errors;
    }

    public function getError(string $inputName) :?string
    {
        if(isset($this->errors[$inputName])){
            foreach($this->errors[$inputName] AS $error){
                return $error;
            }
        }
        return null;
    }

    public function getErrorMessage(string $inputName)
    {
        return "<p class='text-danger font-weight-bold' > ".$this->getError($inputName)." </p>";
    }
}
// SOLID