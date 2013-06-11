<?php
  
class MyValidator extends \Illuminate\Validation\Validator  
{  
    public function validateSomething($attribute, $value, $params = array())  
    {  
        echo "HERE.";  
    }  
}
