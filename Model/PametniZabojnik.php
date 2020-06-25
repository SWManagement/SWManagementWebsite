<?php

require_once "DBinit.php";

class PametniZabojnik {

    public static function getZabojniki() {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT * FROM sensorlist");
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getMeritve() {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT * FROM sensordata ORDER BY reading_time DESC LIMIT 20;");
        $statement->execute();

        return $statement->fetchAll();  
    }

    public static function getMeritveById($ID){
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT * FROM sensordata WHERE sensor = :id ORDER BY reading_time DESC LIMIT 20;");
        $statement -> bindParam(":id", $ID);
        $statement->execute();

        return $statement->fetchAll(); 
    }

    public static function getZabojnikById($ID) {
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT * FROM sensorlist WHERE id = :id");
        $statement->bindParam(":id", $ID);
        $statement->execute();

        return $statement->fetchAll();
    }

    public static function getPolnost($ID){
        $db = DBInit::getInstance();

        $statement = $db->prepare("SELECT reading_time, round(round(((SELECT sensorlist.maxdist FROM sensorlist WHERE sensorlist.id = :id) - round(cast(value1 as decimal(8,0)),0)) 
        / (SELECT sensorlist.maxdist FROM sensorlist WHERE sensorlist.id = :id),2)*100.0) as value1 FROM sensordata WHERE sensor = :id ORDER BY reading_time DESC LIMIT 20");


        $statement -> bindParam(":id", $ID);
        var_dump($statement);

        return $statement -> fetchAll();
    }

    


}