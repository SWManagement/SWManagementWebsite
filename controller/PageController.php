<?php

require_once("ViewHelper.php");
require_once("Model/PametniZabojnik.php");

class PageController {

    public static function project() {
        ViewHelper::render("view/project-info.php");
    }

    public static function index() {
        ViewHelper::render("view/homepage.php");
    }

    public static function team(){
        ViewHelper::render("view/team-info.php");
    }

    public static function pametnizabojnik(){
        ViewHelper::render("view/pametni-zabojnik.php");
    }

    public static function meritve(){
        $zabojniki = PametniZabojnik::getZabojniki();

        if (isset($_GET["id"])){
            if ($_GET["mer"] == 0){
                $meritve = PametniZabojnik::getMeritveById($_GET["id"]);
                $izbrani = PametniZabojnik::getZabojnikById($_GET["id"]);
                ViewHelper::render("view/meritve.php", ["meritve" => $meritve, "zabojniki" => $zabojniki, "izbrani" => $izbrani]);
            } else{
                $meritve = PametniZabojnik::getPolnost($_GET["id"]);
                ViewHelper::render("view/meritve.php", ["meritve" => $meritve, "zabojniki" => $zabojniki]);
            }
        } else{
            $meritve = PametniZabojnik::getMeritve();
            ViewHelper::render("view/meritve.php", ["zabojniki" => $zabojniki]);
        }
    }
}