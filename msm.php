 <?php
$host = 'localhost';
$username = "root";
$password = "";
$dbname = "bioarchaeology";

//Connect to MySQL Server
mysqli_connect($host, $username, $password);

//Select Database
mysqli_select_db($dbname) or die(mysqli_error());

// Retrieve data from Query String
$teres = $_GET['teres'];
$latissimus = $_GET['latissimus'];
$biceps = $_GET['biceps'];
$brachialis = $_GET['brachialis'];
$abductor = $_GET['abductor'];
$deltoidus = $_GET['deltoidus'];
$pectoralis= $_GET['pectoralis'];
$linea = $_GET['linea'];
$gluteus = $_GET['gluteus'];
$gastrocnemian = $_GET['gastrocnemian'];
$soleus = $_GET['soleus'];

// Escape User Input to help prevent SQL Injection
$teres = mysqli_real_escape_string($teres);
$latissimus = mysqli_real_escape_string($latissimus);
$biceps = mysqli_real_escape_string($biceps);
$brachialis= mysqli_real_escape_string($brachialis);
$abductor= mysqli_real_escape_string($abductor);
$deltoidus= mysqli_real_escape_string($deltoidus);
$pectoralis= mysqli_real_escape_string($pectoralis);
$linea= mysqli_real_escape_string($linea);
$gluteus= mysqli_real_escape_string($gluteus);
$gastrocnemian= mysqli_real_escape_string($gastrocnemian);
$soleus= mysqli_real_escape_string($soleus);


//build query
$query = "SELECT * FROM msm WHERE biceps = '$biceps'";

if(is_string($teres)
   $query .= " AND teres <= $teres";

if(is_string($latissimus))
   $query .= " AND latissimus <= $latissimus";

//Execute query
$qry_result = mysqli_query($query) or die(mysqli_error());

//Build Result String
$display_string = "<table>";
$display_string .= "<tr>";
$display_string .= "<th>Name</th>";
$display_string .= "<th>Age</th>";
$display_string .= "<th>Sex</th>";
$display_string .= "<th>WPM</th>";
$display_string .= "</tr>";

// Insert a new row in the table for each person returned
while($row = mysql_fetch_array($qry_result)) {
   $display_string .= "<tr>";
   $display_string .= "<td>$row[name]</td>";
   $display_string .= "<td>$row[age]</td>";
   $display_string .= "<td>$row[sex]</td>";
   $display_string .= "<td>$row[wpm]</td>";
   $display_string .= "</tr>";
}

echo "Query: " . $query . "<br />";
$display_string .= "</table>";

echo $display_string;
?>
?>
