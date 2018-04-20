<?php
    require 'scripts/generate_session.php';
    require 'scripts/base_html_generator.php';
    require 'scripts/basic_html_elements.php';

generate_html_head('WAR Character Database');
generate_bootstrap_navbar();
generate_html_tail();