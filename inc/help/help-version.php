<p><?php _e( 'From the <cite><a href="https://codex.wordpress.org/Function_Reference/wp_register_style">WordPress Codex</a></cite>', 'theme-independent-stylesheets' ); ?>:</p>

<blockquote cite="https://codex.wordpress.org/Function_Reference/wp_register_style">
    <p><?php _e( 'String specifying the stylesheet version number, if it has one. This parameter is used to ensure that the correct version is sent to the client regardless of caching, and so should be included if a version number is available and makes sense for the stylesheet. The version is appended to the stylesheet URL as a query string, such as <span class="tt">?ver=3.5.1</span>.', 'them-independent-stylesheets' ); ?></p>
</blockquote>

<dl>
    <dt><?php _e( 'Checked', 'theme-independent-stylesheets' ); ?>:</dt>

    <dd><?php _e( "Version number will be used. If the text box is left blank, then the default (the WordPress version string) is used as the version number..", 'theme-independent-stylesheets' ); ?></dd>

    <dt><?php _e( 'Unchecked', 'theme-independent-stylesheets' ); ?>:</dt>

    <dd><?php _e( 'No version number will be used.', 'theme-independent-stylesheets' ); ?></dd>
</dl>

<p><?php _e( 'Version only applies to stylesheets with their location set to "external".', 'theme-independent-stylesheets' ); ?></p>
