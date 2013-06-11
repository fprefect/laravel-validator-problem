<?php

class MyController extends BaseController
{
    private $validator_factory;

    public function __construct($validator_factory)
    {
        $this->validator_factory = $validator_factory;
    }
    
    public function getIndex()
    {
        $data = array('data' => '123');
        $rules = array('data' => 'something');

        $validator = $this->validator_factory->make($data, $rules);
        $this->checkValidator('factory', $validator);

        $validator = \Validator::make($data, $rules);
        $this->checkValidator('facade', $validator);
    }

    private function checkValidator($name, $validator)
    {
        if($validator instanceof MyValidator) {
            print "$name: worked correctly\n";
        }
        elseif($validator instanceof \Illuminate\Validation\Validator) {
            print "$name: did not work correctly\n";
        }
    }
}
