<div class="principal">
<h1>La liste des Evenements</h1>
<ul>
    <li><a href="index.php?page=evenement&link=futur">Evenement avenir</a></li>
    <li><a href="index.php?page=evenement&link=today">Evenement d'aujoud'hui</a></li>
    <li><a href="index.php?page=evenement&link=past">Evenement passer</a></li>
</ul>

    <?php

if(isset($_GET['link'])){
  $var = $_GET['link'];
  if($var == "futur"){
    $requette = "SELECT * from evenements where DATE(date_event) >NOW() ;";
  }elseif($var == "today"){
    $requette = "SELECT *from evenements where DATE(date_event) = (SELECT DATE( NOW() ));";
  }elseif($var == "past"){
    $requette = "SELECT *from evenements where date_event  < NOW();";
}}
else{
$requette = "SELECT *from evenements ;";
}
//pour le teste if faut changer la date NOW() ou une date > '2022-07-22';
$cnx = new sql();
$requette = $cnx->afficher($requette);
if (isset($requette) & !empty($requette)) {
    echo '<div class="container">';
    echo '<div class="box">';
    
    echo '<table border="3">';
    echo '<tr>';
    echo '<td>theme_event</td>';
    echo '<td>adress_event</td>';
    
    echo '<td>date_event</td>';
    echo '<td>description_event</td>';
    echo '<td>video_event</td>';
    
    echo '</tr>';
   
    foreach ($requette as $key => $value) {
     $originalDate =  $value['date_event'];

$timestamp = strtotime($originalDate); 
$newDate = date("d-m-Y", $timestamp );
    
        echo '<tr>';
        echo '<td>' . $value['theme_event'] . '</td>';
        echo '<td>' . $value['adress_event'] . '</td>';
        echo '<td>' .$newDate . '</td>';
        echo '<td>' . $value['description_event'] . '</td>';
       echo '<td>' . $value['video_event'] . '</td>';
       
     /*    echo '<td> <input type="submit" name="submit" value="Uploader" /></td>'; */
        echo '</tr>';
    }
    
    echo '</table>';
    echo '</div>';
    echo '</div>';
}else{
    echo " <span class='waring'><strong>!!!!!! il n'ya pas d'evenement</strong></span>";
}

?>
</div>