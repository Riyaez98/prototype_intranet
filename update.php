<?php 
$id = $_POST['id'];
// var_dump($id);
echo "<br>Id : " . $id;
$title = $_POST['title'];
echo "<br>title : " . $title;
// var_dump($title);
$date = $_POST['event-date'];
echo "<br>date : " . $date;
// var_dump($date);
$debut = $_POST['starttime'];
echo "<br>debut : " . $debut;
// var_dump($debut);
$fin = $_POST['endtime'];
echo "<br>fin : " . $fin;
// var_dump($fin);
$moderatrice = $_POST['moderatrice'];
echo "<br>moderatrice : " . $moderatrice;
// var_dump($moderatrice);
$partner = $_POST['partner'];
echo "<br>partner : " . $partner;
// var_dump($partner);
$description = $_POST['description'];
echo "<br>description : " . $description;
// var_dump($description);

var_dump($_POST);