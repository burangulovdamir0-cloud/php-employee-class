<?php


if (!class_exists('Employee')) {

class Employee {

    private $name;
    private $salary;
    private $age;
    
  
    public function __construct($name, $salary, $age) {
        $this->name = $name;
        $this->salary = $salary;
        
        
        $this->setAge($age);
    }
    
   
    public function getName() {
        return $this->name;
    }
    
    
    public function getSalary() {
        return $this->salary . '$';
    }
    
    public function getAge() {
        return $this->age;
    }
    
    
    public function setName($name) {
        $this->name = $name;
        return $this; 
    }
    
    public function setSalary($salary) {
        $this->salary = $salary;
        return $this;
    }
    
 
    public function setAge($age) {
        if ($age >= 0 && $age <= 120) {
            $this->age = $age;
            return $this;
        } else {
          
          
            $this->age = 0;
            echo "Возраст должен быть от 0 до 120. Установлено значение 0.<br>";
            return $this;
        }
    }
    
    
    public function displayInfo() {
        echo "Имя: " . $this->getName() . "<br>";
        echo "Возраст: " . $this->getAge() . "<br>";
        echo "Зарплата: " . $this->getSalary() . "<br>";
        echo "<hr>";
    }
    
   
    public function increaseSalary() {
        
        $this->salary = $this->salary * 1.1;
        return $this;
    }
}

}
?>