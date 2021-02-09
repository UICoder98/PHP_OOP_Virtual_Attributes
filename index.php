<?php
    require_once "Person.php";

    $robbieWilliams = new Person();
    $robbieWilliams->setName("Robbie Williams");
    $robbieWilliams->setBirthday("13.02.1974");

    echo "Vor- und Zuname: {$robbieWilliams->getName()}";
    echo "<br>";
    echo "Geburtstag: {$robbieWilliams->getBirthday()}";
    echo "<br>";
    echo "Birth timestamp: {$robbieWilliams->getBirthTimestamp()}";
?>