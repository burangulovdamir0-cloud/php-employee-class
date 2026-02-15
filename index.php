<?php


require_once 'classes' . DIRECTORY_SEPARATOR . 'Employee.php';

echo "<h2>Тестирование класса Employee</h2>";

$employee = new Employee("Иван Петров", 2500, 30);

echo "<h3>Данные после создания:</h3>";
$employee->displayInfo();

echo "<h3>Использование геттеров:</h3>";
echo "Имя: " . $employee->getName() . "<br>";
echo "Возраст: " . $employee->getAge() . "<br>";
echo "Зарплата: " . $employee->getSalary() . "<br>";

echo "<h3>Использование сеттеров (изменяем данные):</h3>";
$employee->setName("Петр Сидоров");
$employee->setAge(35);
$employee->setSalary(3000);

echo "<h3>Данные после изменения:</h3>";
$employee->displayInfo();

echo "<h3>Проверка валидации возраста:</h3>";
$employee->setAge(150); // Попытка установить некорректный возраст
echo "Текущий возраст: " . $employee->getAge() . "<br>";

echo "<h3>Увеличение зарплаты на 10%:</h3>";
$employee->increaseSalary();
echo "Новая зарплата: " . $employee->getSalary() . "<br>";

echo "<h3>Создание еще одного сотрудника:</h3>";
$employee2 = new Employee("Анна Смирнова", 3200, 28);
$employee2->displayInfo();

echo "<h3>Увеличение зарплаты второго сотрудника дважды:</h3>";
$employee2->increaseSalary()->increaseSalary();
$employee2->displayInfo();

?>