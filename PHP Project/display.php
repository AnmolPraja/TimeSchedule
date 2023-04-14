<style>
  table {
    border-collapse: collapse;
    width: 100%;
  } 
  th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid #ddd;
  } 
  th {
    background-color: #f2f2f2;
  }  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
<h2>Welcome to schdule</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM timetable";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<table>";
  echo "<tr><th>Time</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["time"]."</td>";
    echo "<td>".$row["monday"]."</td>";
    echo "<td>".$row["tuesday"]."</td>";
    echo "<td>".$row["wednesday"]."</td>";
    echo "<td>".$row["thursday"]."</td>";
    echo "<td>".$row["friday"]."</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
mysqli_close($conn);
?>

<button onclick="redirectToTable()">Edit Table</button>

<script>
function redirectToTable() {
  window.location.href = "table.php";
}
</script>
