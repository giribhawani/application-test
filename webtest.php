<?php
    $people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
//Table begins
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

//looping through the $people array and displaing info in the table
//for loop begins
    for($i=0; $i< sizeof($people); $i++){
    //assigning full name and email into a single variable to alert later.
    //$nameEmail = "Name ".$people[$i]['first_name']." ".$people[$i]['last_name']." Email: ".$people[$i]['email'];
    echo "<tr>";
    echo "<td>".$people[$i]['id']."</td>";
    echo "<td>".$people[$i]['first_name']."</td>";
    echo "<td>".$people[$i]['last_name']."</td>";
    echo "<td>".$people[$i]['email']."</td>";
    echo "<td><input type='button' id='btn' onclick= 'alertName()' value='Click Here' /></tr>";
    
    //Sorry, count not alert name and email when button is clicked. Still Working on the alertName()- a javaScirpt function and 
    //php function....
}
 echo "</tr>";
 echo "</table>";
 //Table ends
