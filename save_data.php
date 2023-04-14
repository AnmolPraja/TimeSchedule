<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "failed";
}

$table = $_POST['table'];

$sql = "UPDATE timetable SET
        monday='$table[0]', tuesday='$table[1]', wednesday='$table[2]',
        thursday='$table[3]', friday='$table[4]' WHERE time='12 am';
        
        UPDATE timetable SET
        monday='$table[5]', tuesday='$table[6]', wednesday='$table[7]',
        thursday='$table[8]', friday='$table[9]' WHERE time='2 am';
        
        UPDATE timetable SET
        monday='$table[10]', tuesday='$table[11]', wednesday='$table[12]',
        thursday='$table[13]', friday='$table[14]' WHERE time='4 am';
        
        UPDATE timetable SET
        monday='$table[15]', tuesday='$table[16]', wednesday='$table[17]',
        thursday='$table[18]', friday='$table[19]' WHERE time='6 am';
        
        UPDATE timetable SET
        monday='$table[20]', tuesday='$table[21]', wednesday='$table[22]',
        thursday='$table[23]', friday='$table[24]' WHERE time='8 am';
        
        UPDATE timetable SET
        monday='$table[25]', tuesday='$table[26]', wednesday='$table[27]',
        thursday='$table[28]', friday='$table[29]' WHERE time='10 am';
        
        UPDATE timetable SET
        monday='$table[30]', tuesday='$table[31]', wednesday='$table[32]',
        thursday='$table[33]', friday='$table[34]' WHERE time='12 pm';
        
        UPDATE timetable SET
        monday='$table[35]', tuesday='$table[36]', wednesday='$table[37]',
        thursday='$table[38]', friday='$table[39]' WHERE time='2 pm';
        
        UPDATE timetable SET
        monday='$table[40]', tuesday='$table[41]', wednesday='$table[42]',
        thursday='$table[43]', friday='$table[44]' WHERE time='4 pm';
        
        UPDATE timetable SET
        monday='$table[45]', tuesday='$table[46]', wednesday='$table[47]',
        thursday='$table[48]', friday='$table[49]' WHERE time='6 pm';
        
        UPDATE timetable SET
        monday='$table[50]', tuesday='$table[51]', wednesday='$table[52]',
        thursday='$table[53]', friday='$table[54]' WHERE time='8 pm';
        
        UPDATE timetable SET
        monday='$table[55]', tuesday='$table[56]', wednesday='$table[57]',
        thursday='$table[58]', friday='$table[59]' WHERE time='10 pm'";

if (mysqli_multi_query($conn, $sql)) {
  echo "Data updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
