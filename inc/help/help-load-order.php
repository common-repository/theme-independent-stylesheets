<p><?php _e( 'Determines the order in which stylesheets (within their location group) will be placed in the HTML. Load order is sorted in ascending order.', 'theme-independent-stylesheets' ); ?></p>

<p><?php _e( 'Overall, stylesheets are sorted by the following (in order)', 'theme-independent-stylesheets' ); ?>:</p>

<ol>
    <li><?php _e( 'Location', 'theme-independent-stylesheets' ); ?>
        <ol>
            <li><?php _e( 'External', 'theme-independent-stylesheets' ); ?></li>

            <li><?php _e( 'Inline', 'theme-independent-stylesheets' ); ?></li>
        </ol>
    </li>

    <li><?php _e( 'Load Order (ascending order)', 'theme-independent-stylesheets' ); ?></li>

    <li><?php _e( 'ID (ascending order, if load orders are equivalent)', 'theme-independent-stylesheets' ); ?></li>
</ol>
