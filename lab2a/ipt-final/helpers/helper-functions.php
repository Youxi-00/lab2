<?php

function dump_session()
{
    ?>
        <div class="p-card">
        <h3>Session Data</h3>
        <p class="p-card__content">
            <pre><?php print_r($_SESSION); ?></pre>
        </p>
        </div>
    <?php
}