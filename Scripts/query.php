<?php

// $gender = $_POST['Gender'];
// $association = $_POST['Association'];
// $field = $_POST['Field'];
// $sortByDate = $_POST['sortByDate'];

// DB CONNECTION
function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;
    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
        $config = parse_ini_file('../../config.ini'); 
        $connection = mysqli_connect($config['db'],$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection;
}


// QUERY - INSERT
function db_query($query) {
    //connect
    $connection = db_connect();

    //query
    $result = mysqli_query($connection,$query);
    return $result;
}

// QUERY - SELECT
function db_select($query) {
    $rows = array();
    $result = db_query($query);

    // If query failed, return `false`
    if($result === false) {
        return false;
    }

    // If query was successful, retrieve all the rows into an array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// HANDLE ERROR
function db_error() {
    $connection = db_connect();
    return mysqli_error($connection);
}

function checkInput($input) {
    $connection = db_connect();
    $result = stripslashes($input);
    $result = mysqli_real_escape_string($connection, $result);
    return $result;
}

function addFeedback($name, $email, $text){
    checkInput($name);
    checkInput($email);
    checkInput($text);    
    if ($text != null and $text != "Write your feedback here!"){        
        // valmistetaan lause
        $sql = db_query("INSERT INTO feedback(message, name, email, date) VALUES ('$text', '$name', '$email', CURDATE())");
    } else {
        echo "Please give us feedback!";
    }
}


function printResult($gender, $association, $sortByDate){  
    if ($gender != null and $association != null){
        $sql = "SELECT SUM(donation) AS sum FROM donations WHERE gender='$gender' AND association='$association'";
    } else if($gender != null){
        $sql = "SELECT SUM(donation) AS sum FROM donations WHERE gender='$gender'";
    } else if($association != null){
        $sql = "SELECT SUM(donation) AS sum FROM donations WHERE association='$association'";
    } else {
        $sql = "SELECT SUM(donation) AS sum FROM donations";
    }
    $result = db_query($sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $sum = $row["sum"];
        }
    }
    if ($gender != null and $association != null){
        $sql = "SELECT * FROM donations WHERE gender='$gender' AND association='$association'";
    } else if ($gender != null){
        $sql = "SELECT * FROM donations WHERE gender='$gender'";
    } else if ($association != null){
        $sql = "SELECT * FROM donations WHERE association='$association'";
    } else {
        $sql = "SELECT * FROM donations;";
    }
    $result = db_query($sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["association"] . " - " . $row["date"] . " - " . $row["gender"] . " - " . $row["donation"] . "<br>";
        }
        echo "Sum of selected donations: $sum";
    } else {
        echo "No results for your query!";
    }

}



/* EXAMPLE QUERYs
 - SELECT -
$rows = db_select("SELECT * FROM bloodTypes ORDER BY amount ASC;");
if($rows === false) {
    $error = db_error();
}

 - INSERT -
$result = db_query("INSERT INTO bloodTypes VALUES ('$bloodType', '$amount');");
if($result === false) {
    $error = db_error();
//TÄHÄN UPDATE FUNCTIO
    } else {
}
*/
/*
/*
// TEST PRINT
$rows = db_select("SELECT * from donations;")/*("SELECT field FROM fieldOfStudy WHERE association=(SELECT association FROM donations WHERE gender='$gender');")*/;
/*if($rows === false) {
    $error = db_error();
}


// PRINT ROWs AS HTML TABLE
function printTable()
if (count($rows) > 0): ?>
    <table border="1">
        <thead>
            <tr>
                <th><?php echo implode('</th><th>', array_keys(current($rows))); ?></th>
            </tr>
        </thead>
    <tbody>
<?php foreach ($rows as $row): array_map('htmlentities', $row); ?>
    <tr>
        <td><?php echo implode('</td><td>', $row); ?></td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>*/
