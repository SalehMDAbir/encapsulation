<?php
class chairmanEmployee{
    protected $salaryRange = '45000'.'<br>';
    public function salary(){
        return $this->salaryRange;
    }

}
class managerEmployee extends chairmanEmployee{
    public function salary(){
        return $this->salaryRange;
    }

}
$manager = new managerEmployee();
echo $manager->salary();
class seniorDeveloper{
    public $salary = '70000';
    protected function salary(){
        return $this->salary;
    }
}
class midDeveloper extends seniorDeveloper{
    public function salary(){
        return $this-> salary;
    }
}
$intern = new intern();
echo $intern->salary();



?>