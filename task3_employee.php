<?php

class Employee
{
  private $salary;

  public function setSalary($amount)
  {
    if ($amount >= 0) {
      $this->salary = $amount;
    } else {
      throw new Exception("Salary can not be Negative");
    }
  }
  public function getSalary()
  {
    return $this->salary;
  }
}

$employee = new Employee();
$employee->setSalary(20000);

echo "Employee Salary: " . $employee->getSalary() . "<br>";
