<?php

//Including Database configuration file.

include "db.php";

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.

   $name = $_POST['search'];


//Search query.

   $Query = "SELECT * FROM skeleton WHERE name LIKE '%$name%' ";

//Query execution

   $ExecQuery = MySQLi_query($con, $Query);

//Creating unordered list to display result.
   echo '<table>'; ?>
<tbody>
<tr>
    <td><b>Name</b></td>
    <td><b>Age - bones</b></td>
    <td><b>Age - teeth</b></td>
    <td><b>Activity</b></td>
  </tr>

   <?php

   //Fetching result from database.

   while ($Result = MySQLi_fetch_array($ExecQuery)) {

       // ?>
       <tr onclick='fill("<?php echo $Result['name']; ?>")'>
   <!-- Creating unordered list items.

        Calling javascript function named as "fill" found in "script.js" file.

        By passing fetched result as parameter. -->



   <!-- Assigning searched result in "Search box" in "search.php" file. -->


       <td><?php echo $Result['name']; ?></td>
       <td><?php echo $Result['age_bones']; ?></td>
       <td><?php echo $Result['age_teeth']; ?></td>
       <td><?php echo $Result['activity']; ?></td>
    </tr>

   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php

}} ?>
</tbody>
</table>