<?php
$servername = "localhost";
$username = "root";
$password = "AwX-2050";
$dbname = "Picasso";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  while($row = $result->fetch_assoc()) {
    $topic = $row['Topic'];
    $content = $row['Content'];
    $answer = $row['Answer'];
    echo "<div class='single_questions'><p class='title_q'>" ;
    echo $topic  ;
    echo "</p><p class='content_q'>" ;
    echo $content;
    echo "</p>";
    echo "<div id='answer_q'>";
    echo $answer;
    echo "</div></div>";

      
  }
} else {
  echo "0 results";
}
$conn->close();
?>
