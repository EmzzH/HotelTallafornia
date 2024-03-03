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
        $user_id = $_POST['userID'];
        $name = $_POST['name'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $phno = $_POST['phno'];
        $employeeId = $_POST['employeeID'];
        $job = $_POST['job'];

        // Create a new User object
        $employee = new Employee($user_id, $name, $dob, $address, $phno, $employeeId, $job);

        // create the conection
        $connection = new Database();

        // call the insert to DB Function Here
        $connection->insert($userTable, $employee->userArray());
        $connection->insert($employeeTable, $employee->employeeArray());

        echo "Table data stored successfully!";
    }
}
