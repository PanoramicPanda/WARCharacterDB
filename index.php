<?php
    require 'scripts/base_html_generator.php';
//    foreach (glob("scripts/*.php") as $filename)
//    {
//        include $filename;
//    }

generate_html_head('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', 'WAR Character Database');
//generate_html_head('https://stackpath.bootstrapcdn.com/bootswatch/4.0.0/slate/bootstrap.min.css', 'WAR Character Database');
generate_html_tail();