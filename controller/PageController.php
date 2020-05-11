<?php

require_once("ViewHelper.php");

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
}