<?php

class IndexClass
{
    private $val1;
    private $val2;
    private $result;
    public function __construct($val1,$val2,$result)
    {
        $this->val1=$val1;
        $this->val2=$val2;
        $this->result=$result;
    }
    public function get(){
        if ($this->val1 + $this->val2 == 0){
            return "Please enter digit";
        }
        else if ($this->result == 1){
            return $this->val1 + $this->val2;
        }
        else if ($this->result == 2){
            return $this->val1 - $this->val2;
        }
        else if ($this->result == 3){
            return $this->val1 * $this->val2;
        }
        else if ($this->result == 4) {
            return $this->val1 / $this->val2;
        }
        return "Please enter digit";
    }
}
$result = new IndexClass((doubleval($_POST['val1'])),(doubleval($_POST['val2'])),(int)$_POST['result']);
echo $result->get();