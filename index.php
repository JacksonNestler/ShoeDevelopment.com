<?php

require 'app/start.php';
require VIEW_ROOT.'/home.php';
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
?>