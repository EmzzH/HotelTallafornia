 <?php
use src\user\Employee;
use src\database\Database;
// use src\user\User;

error_reporting(E_ALL);
ini_set('display_errors', 1);

include '../src/user/User.php';

include '../src/user/Employee.php';

include '../src/database/Database.php';

function addNewEmployee()
{
    $userTable = 'User';
    $employeeTable = 'Employee';

    if (isset($_POST['submit'])) {

        // Retrieve POST data
//        $user_id = $_POST['user_id'];
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $ph_no = $_POST['ph_no'];
//        $employee_id = $_POST['employee_id'];
        $job = $_POST['job'];


        // Create a new User object
//        $employee = new Employee($user_id, $name, $dob, $address, $ph_no, $employee_id, $job);
        $employee = new Employee($name, $dob, $address, $ph_no,  $job);

        // create the conection
//        $connection = new Database();


//        $connection = new PDO($dsn, $username, $password, $options);

//        echo $name, $dob, $address, $ph_no,  $job;
        // call the insert to DB Function Here
        Database::addToTable($connection, $employee->userArray(), $userTable);
        Database::addToTable($connection, $employee->userArray(), $employeeTable);

        echo "Table data stored successfully!";
    }
}
