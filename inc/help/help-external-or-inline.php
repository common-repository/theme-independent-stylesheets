<?php
$upload_dir = wp_upload_dir();
?>
<p><?php _e( 'Determines how the stylesheet is loaded.', 'theme-independent-stylesheets' ); ?></p>

<dl>
      <dt><?php _e( 'External', 'theme-independent-stylesheets' ); ?></dt>

      <dd>
            <?php
            _e( 'Loaded from an external file using the <code>&lt;link /></code> tag. Example:', 'theme-independent-stylesheets' );
            ?>
            <br />

            <br />

            <code>&lt;link href="' . trailingslashit( $upload_dir['url'] ) . 'example.css?ver=' . get_bloginfo( 'version' ) . '" media="all" rel="stylesheet" /&gt;</code>
      </dd>

      <dt><?php _e( 'Inline', 'theme-independent-stylesheets' ); ?></dt>

      <dd>
            <?php
            _e( 'Contents of stylesheet are placed directly into page HTML using <code>&lt;style&gt;</code> tags. Example:', 'theme-independent-stylesheets' );
            ?>

            <br />

            <code><pre>&lt;style id="example-inline-css" media="all" type="text/css">
    body {
        font-size: 16px;
    }

    p {
        color: #000000;
    }
&lt;/style&gt;</pre></code>
