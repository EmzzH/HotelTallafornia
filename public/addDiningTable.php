<?php
include "templates/header.php";


// Include functions file
include "../src/functions/newDiningTable.php";

// Call Function to
addNewDiningTable();
?>

<title>Add Objects</title>

<h2>Add a Table</h2>

<div id="dataForm">
    <form method="post">
        <label for="table_no">Table No</label>
        <input type="text" name="table_no" id="table_no"><br>

        <label for="capacity">Capacity</label>
        <input type="text" name="capacity" id="capacity"><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>


<?php 

// Include footer template.
include "templates/footer.php";
?>

