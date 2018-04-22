<?php
    require 'scripts/generate_session.php';
    require 'scripts/base_html_generator.php';
    require 'scripts/basic_html_elements.php';

generate_html_head('WAR Character Database');
generate_bootstrap_navbar('Index'); ?>

<div class="card mx-2">
    <div class="card-header">
        Test
    </div>
    <div class="card-body">
         Derp
    </div>
</div>

<?php
generate_html_tail();