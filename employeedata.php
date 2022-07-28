<?php
class Employee{
    private $firstName;
    private $lastName;
    private $age;
    private $salary;
    private $companyName;
    private $designation;
    public function setFirstName($fname){
        $this->firstName=$fname;
    }
    public function setLastName($lname){
        $this->lastName=$lname;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function setSalary($salary){
        $this->salary=$salary;
    }
    public function setCompanyName($companyName){
        $this->companyName=$companyName;
    }
    public function setDesignation($designation){
        $this->designation=$designation;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getAge(){
        return $this->age;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getCompanyName(){
        return $this->companyName;
    }
    public function getDesignation(){
        return $this->designation;
    }
}
$emp1 = new Employee();
$emp2 = new Employee();
$emp3 = new Employee();
$emp4 = new Employee();
$emp5 = new Employee();
$emp6 = new Employee();
$emp7 = new Employee();
$emp8 = new Employee();
$emp9 = new Employee();
$emp10 = new Employee();
$emp1->setFirstName("Shivam");
$emp1->setLastName("Singh");
$emp1->setAge(22);
$emp2->setFirstName("Sagar");
$emp2->setLastName("Sain");
$emp2->setAge(24);
$emp3->setFirstName("Ritesh");
$emp3->setLastName("Rana");
$emp3->setAge(22);
$emp4->setFirstName("Akansha");
$emp4->setLastName("Wadkar");
$emp4->setAge(21);
$emp5->setFirstName("Yash");
$emp5->setLastName("Nagar");
$emp5->setAge(24);
$emp6->setFirstName("Rohan");
$emp6->setLastName("Dhakad");
$emp6->setAge(21);
$emp7->setFirstName("Yogesh");
$emp7->setLastName("Patel");
$emp7->setAge(22);
$emp8->setFirstName("Atul");
$emp8->setLastName("Dwivedi");
$emp8->setAge(49);
$emp9->setFirstName("Fatima");
$emp9->setLastName("Khan");
$emp9->setAge(21);
$emp10->setFirstName("Abbaas");
$emp10->setLastName("Akhtar");
$emp10->setAge(22);
$employees=array($emp1,$emp2,$emp3,$emp4,$emp5,$emp6,$emp7,$emp8,$emp9,$emp10);
?>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Company Name</th>
        <th>Designation</th>
    </tr>
    <?php
    foreach ($employees as $employee){
        ?>
    <tr>
        <td><?php echo $employee->getFirstName();?></td>
    <td><?php echo $employee->getLastName(); ?></td>
    <td><?php echo $employee->getAge(); ?></td>
    </tr>
    <?php
    }
    ?>
</table>
<style>
    table,th,td{
        border:1px solid black;
        border-collapse:collapse;
        padding:10px;
    }
</style>
