<?php

require 'app/start.php';

/**
$pages = $db->query("
    SELECT id, label, slug
    FROM pages
    ")->fetchAll(PDO::FETCH_ASSOC);
*/
$query = $db->prepare("
    SELECT id, label, slug
    FROM pages
    ");
if (!$query->execute())
  die('Query Failed');
$pages = $query->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT.'/home.php';//Needs to be after the $pages var decleration to have it included in it's scope.
?>
