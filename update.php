<?php 

$id = $_POST['id'];

echo "<br>Id : " . $id;
$title = $_POST['title'];
echo "<br>title : " . $title;

$date = $_POST['event-date'];
echo "<br>date : " . $date;

$debut = $_POST['starttime'];
echo "<br>debut : " . $debut;

$fin = $_POST['endtime'];
echo "<br>fin : " . $fin;

$moderatrice = $_POST['moderatrice'];
echo "<br>moderatrice : " . $moderatrice . "  as string :";
var_dump(implode(", ", $moderatrice));

$partner = $_POST['partner'];
echo "<br>partner : " . $partner;

$description = $_POST['description'];
echo "<br>description : " . $description;


// header("Location:" . $_SERVER['HTTP_REFERER']);
$content = array(
    'ID'             => 152,
    'post_content'   => 'alllo',
    'post_title'     => 'matthieu'
);
var_dump($content);

// $update_id = wp_update_post($content, true);
// var_dump( $update_id);


