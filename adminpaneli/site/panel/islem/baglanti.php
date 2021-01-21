<?php
try {
    $baglanti = new PDO('mysql:host=localhost;dbname=adminpanel', 'root', '');
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>