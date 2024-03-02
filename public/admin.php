<?php
// Include header template.
include "templates/header.php";

?>
<title>Admin Page</title>
  <div>
    <form action="addRoom.php" method="post">
        <button type="submit">Add Room</button>
    </form>
</div>
<br>
 <div>
    <form action="addDiningTable.php" method="post">
        <button type="submit">Add Table</button>
    </form>
</div>
<br>
<div>
    <form action="addEmployee.php" method="post">
        <button type="submit">Add Employee</button>
    </form>
</div>
<br>


<?php

include "templates/footer.php";
?>