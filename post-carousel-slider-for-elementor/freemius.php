<?php
if ( ! function_exists( 'pcsfe_fs' ) ) {
    // Create a helper function for easy SDK access.
    function pcsfe_fs() {
        global $pcsfe_fs;

        if ( ! isset( $pcsfe_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $pcsfe_fs = fs_dynamic_init( array(
                'id'                  => '16652',
                'slug'                => 'post-carousel-slider-for-elementor',
                'type'                => 'plugin',
                'public_key'          => 'pk_f51ff579c8c353312b35fcee7f36f',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                'menu'                => array(
                    'slug'           => 'wbel-post-slider',
                    'account'        => false,
                    'contact'        => false,
                ),
            ) );
        }

        return $pcsfe_fs;
    }

    // Init Freemius.
    pcsfe_fs();
    // Signal that SDK was initiated.
    do_action( 'pcsfe_fs_loaded' );
}