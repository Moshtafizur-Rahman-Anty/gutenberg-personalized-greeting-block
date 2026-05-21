
<?php

    if (! defined("ABSPATH")) {

    exit;

    }

?>


<p <?php echo get_block_wrapper_attributes(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>

<?php

    if (isset($attributes)) {

    echo esc_html($attributes['greetingMessage']);

    }

?>


</p>