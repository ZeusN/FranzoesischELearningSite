<?php
$id = $_GET['id'];
$db = mysqli_connect("s185.goserver.host", "web289_1", "123456", "web289_db1");
$db->query("SET NAMES utf8");
$sql = "SELECT * FROM praesens where praesens_id='" . $id . "'" ;
//. $_GET['id'] . "'"
if ($erg = $db->query($sql)) {
		while ($datensatz = mysqli_fetch_object($erg)) {
      $je = $datensatz->je_praesens;
      $jej = $datensatz->je_j;
      $tu = $datensatz->tu_praesens;
      $il = $datensatz->il_praesens;
      $nous = $datensatz->nous_praesens;
      $vous = $datensatz->vous_praesens;
      $ils = $datensatz->ils_praesens;
      $franz = $datensatz->french;
      $deutsch = $datensatz->german;
	}
}
$sql = "SELECT * FROM passecompose where pc_id='" . $id . "'" ;
if ($erg = $db->query($sql)) {
    while ($datensatz = mysqli_fetch_object($erg)) {
  $je_pc = $datensatz->je_pc;
  $hilfsverb = $datensatz->Hilfsverb;
  $tu_pc = $datensatz->tu_pc;
  $il_pc = $datensatz->il_pc;
  $nous_pc = $datensatz->nous_pc;
  $vous_pc = $datensatz->vous_pc;
  $ils_pc = $datensatz->ils_pc;
}
}
$sql = "SELECT * FROM imparfait where ip_id='" . $id . "'" ;
if ($erg = $db->query($sql)) {
    while ($datensatz = mysqli_fetch_object($erg)) {
  $je_ip = $datensatz->ip_je;
  $tu_ip = $datensatz->ip_tu;
  $il_ip = $datensatz->ip_il;
  $nous_ip = $datensatz->ip_nous;
  $vous_ip = $datensatz->ip_vous;
  $ils_ip = $datensatz->ip_ils;
}
}
$sql = "SELECT * FROM futur where f_id='" . $id . "'" ;
if ($erg = $db->query($sql)) {
    while ($datensatz = mysqli_fetch_object($erg)) {
  $je_f = $datensatz->f_je;
  $tu_f = $datensatz->f_tu;
  $il_f = $datensatz->f_il;
  $nous_f = $datensatz->f_nous;
  $vous_f = $datensatz->f_vous;
  $ils_f = $datensatz->f_ils;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="verben.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <title><?php echo $franz;?></title>
</head>
<body>
  <div class="top">
  <h1><a href="index.php"><i class="fas fa-arrow-left"></i></a><?php echo "<span id='halfright'>" . $franz . "</span><span id='right'>" . $deutsch . "</span>";?></h1>
  </div>
  <div class="content">
  <div class="field">
  <h2>présent</h2>
  <table class="table">
  <tr>
    <td>
<?php 
    if($jej == 0) {
      echo "je";
    }
    else {
      echo "j'";
    };
?>
    </td>
    <td><?php echo $je; ?></td>   
</tr>
<tr>
    <td>tu</td>
    <td><?php echo $tu; ?></td>   
</tr>
<tr>
    <td>il/elle</td>
    <td><?php echo $il; ?></td>   
</tr>
<tr>
    <td>nous</td>
    <td><?php echo $nous; ?></td>   
</tr>
<tr>
    <td>vous</td>
    <td><?php echo $vous; ?></td>   
</tr>
<tr>
    <td>ils/elles</td>
    <td><?php echo $ils; ?></td>   
</tr>
</table>
</div>



<div class="field">
  <h2>passe composé</h2>
  <table class="table">
  <tr>
    <td>
<?php 
    if($hilfsverb == 1) {
      echo "j'ai";
    }
    else {
      echo "je suis";
    };
?>
    </td>
    <td><?php echo ($je_pc); ?></td>   
</tr>
<tr>
    <td>
    <?php 
    if($hilfsverb == 1) {
      echo "tu as";
    }
    else {
      echo "tu es";
    };
?>
</td>
    <td><?php echo $tu_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "il a";
    }
    else {
      echo "il est";
    };
?>
</td>
    <td><?php echo $il_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "nous avons";
    }
    else {
      echo "nous sommes";
    };
?>
</td>
    <td><?php echo $nous_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "vous avez";
    }
    else {
      echo "vous êtes";
    };
?>
</td>
    <td><?php echo $vous_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "ils ont";
    }
    else {
      echo "ils sont";
    };
?>
</td>
    <td><?php echo $ils_pc; ?></td>   
</tr>
</table>
</div>


<div class="clear"></div>


<div class="field">
  <h2>imparfait</h2>
  <table class="table">
  <tr>
    <td>
<?php 
    if($jej == 0) {
      echo "je";
    }
    else {
      echo "j'";
    };
?>
    </td>
    <td><?php echo $je_ip; ?></td>   
</tr>
<tr>
    <td>tu</td>
    <td><?php echo $tu_ip; ?></td>   
</tr>
<tr>
    <td>il/elle</td>
    <td><?php echo $il_ip; ?></td>   
</tr>
<tr>
    <td>nous</td>
    <td><?php echo $nous_ip; ?></td>   
</tr>
<tr>
    <td>vous</td>
    <td><?php echo $vous_ip; ?></td>   
</tr>
<tr>
    <td>ils/elles</td>
    <td><?php echo $ils_ip; ?></td>   
</tr>
</table>
</div>



<div class="field">
  <h2>futur</h2>
  <table class="table">
  <tr>
    <td>
<?php 
    if($jej == 0) {
      echo "je";
    }
    else {
      echo "j'";
    };
?>
    </td>
    <td><?php echo $je_f; ?></td>   
</tr>
<tr>
    <td>tu</td>
    <td><?php echo $tu_f; ?></td>   
</tr>
<tr>
    <td>il/elle</td>
    <td><?php echo $il_f; ?></td>   
</tr>
<tr>
    <td>nous</td>
    <td><?php echo $nous_f; ?></td>   
</tr>
<tr>
    <td>vous</td>
    <td><?php echo $vous_f; ?></td>   
</tr>
<tr>
    <td>ils/elles</td>
    <td><?php echo $ils_f; ?></td>   
</tr>
</table>
</div>


<div class="field">
  <h2>passe composé</h2>
  <table class="table">
  <tr>
    <td>
<?php 
    if($hilfsverb == 1) {
      echo "j' avais";
    }
    else {
      echo "j' étais";
    };
?>
    </td>
    <td><?php echo ($je_pc); ?></td>   
</tr>
<tr>
    <td>
    <?php 
    if($hilfsverb == 1) {
      echo "tu avais";
    }
    else {
      echo "tu étais";
    };
?>
</td>
    <td><?php echo $tu_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "il avait";
    }
    else {
      echo "il était";
    };
?>
</td>
    <td><?php echo $il_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "nous avions";
    }
    else {
      echo "nous étions";
    };
?>
</td>
    <td><?php echo $nous_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "vous aviez";
    }
    else {
      echo "vous étiez";
    };
?>
</td>
    <td><?php echo $vous_pc; ?></td>   
</tr>
<tr>
<td>
    <?php 
    if($hilfsverb == 1) {
      echo "ils avaient ";
    }
    else {
      echo "ils étaient";
    };
?>
</td>
    <td><?php echo $ils_pc; ?></td>   
</tr>
</table>
</div>



</div>
<?php exit; ?>
</body>
</html>