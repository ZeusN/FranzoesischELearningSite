<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title>Verben</title>
  <script>
    function mySearch() {
  // Declare variables
  var doc, input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('input');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

var fl = 1;


function openMenu() {
if (fl == 1)
{
  var v;
  var i;

  document.getElementById("sidebar").style.width = "198px";
  document.getElementById("sidebar").style.borderRight = "solid orange 2px";
  document.getElementById("arrow").className = "fas fa-minus";
  document.getElementById("hbtn").style.display = "block";


  fl = 0;
}else
{
  document.getElementById("sidebar").style.width = "0";
  document.getElementById("sidebar").style.border = "none";
  document.getElementById("arrow").className = "fas fa-bars";
  document.getElementById("hbtn").style.display = "none";

  fl = 1;
}
}
  </script>
</head>
<body>
<div>

<div class="top">
  <div class="search">
    <input type="text" id="input" onkeyup="mySearch()" placeholder="Search..">
  </div>
</div>

<div class="content"></div>
  <div class="results">
    <ul id="myUL">
      <?php
$db = mysqli_connect("s185.goserver.host", "web289_1", "123456", "web289_db1");

if (!$db) {
  echo "Fehler: konnte nicht mit MySQL verbinden." . PHP_EOL;
  echo "Debug-Fehlernummer: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debug-Fehlermeldung: " . mysqli_connect_error() . PHP_EOL;
  exit;
}

$sql = "SELECT * FROM verbenkurz ORDER BY `verbenkurz`.`french` ASC";
if ($erg = $db->query($sql)) {
	if ($erg = $db->query($sql)) {
		while ($datensatz = mysqli_fetch_object($erg)) {
      echo '<li><a href="verb.php?id=' . $datensatz->id . '">';
      echo $datensatz->french;
      echo "<span class=deutsch>";
      echo $datensatz->german;
      echo "</span></a></li>";
		}
	}
}

?>
    </ul>
  </div>
</div>


<div id="sidebar">
  <a id="hbtn" href="/index.html"><i class="fas fa-home"></i> - HOME</a>
</div>

<div id="sideborder">
<h1><span onclick="openMenu()"><i id="arrow" class="fas fa-bars" ></i></span></h1>
</div>

</div>
</body>
</html>