<?php
require 'scripts/generate_session.php';
require 'scripts/base_html_generator.php';
require 'scripts/basic_html_elements.php';

generate_html_head('WAR Character Database');
generate_bootstrap_navbar('Registration'); ?>

    <div class="card card-default">
        <div class="card-header">
            <h3>So, you wish to join WAR?</h3>
        </div>
        <div class="card-body">
        </div>
    </div>

<?php
generate_html_tail();
