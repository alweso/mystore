<?php
$args = array (
    'before'            => '<div class="storezz-page-links"><span class="storezz-page-links_text">' . __( 'More pages: ', 'storezz' ) . '</span>',
    'after'             => '</div>',
    'link_before'       => '<span class="storezz-page-link">',
    'link_after'        => '</span>',
    'next_or_number'    => 'next',
    'nextpagelink'      => __( 'Next &raquo', 'storezz' ),
    'previouspagelink'  => __( '&laquo Previous', 'storezz' ),
);

wp_link_pages( $args );
?>
