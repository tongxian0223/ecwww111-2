<?php

/**
 * Newspaperss tr Theme: Block Patterns
 *
 * @package WordPress
 * @subpackage newspaperss tr
 * @since newspaperss tr 1.0.3
 */

/**
 * Register Block Pattern Category.
 */
if (function_exists('register_block_pattern_category')) {

    register_block_pattern_category(
        'newspapersstr',
        array('label' => __('Newspaperss tr', 'newspaperss-tr'))
    );
}
/**
 * Register Block Patterns.
 */
if (function_exists('register_block_pattern')) {

    register_block_pattern(
        'newspapersstr/pagenot-found-newspapersx',
        array(
            'title'      => __('Page Not Found', 'newspaperss-tr'),
            'categories' => array('newspapersstr'),
            'content'    => ' <!-- wp:cover {"dimRatio":90,"customOverlayColor":"#202020","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim" style="background-color:#202020"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"0","fontSize":"120px"}},"textColor":"vivid-green-cyan"} -->
            <p class="has-text-align-center has-vivid-green-cyan-color has-text-color" style="font-size:120px;line-height:0"><em>' . esc_html__('"', 'newspaperss-tr') . '</em></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
            <p class="has-text-align-center has-large-font-size"><em>' . esc_html__('Success is not final; failure is not fatal: it is the courage to continue that counts.', 'newspaperss-tr') . '</em></p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"vivid-green-cyan","fontSize":"medium"} -->
            <p class="has-text-align-center has-vivid-green-cyan-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);line-height:1;text-transform:uppercase">
            ' . esc_html__('Winston Churchill', 'newspaperss-tr') . '</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <p class="has-text-align-center" style="margin-top:0;margin-bottom:0;font-size:14px;line-height:1">' . esc_html__('Prime Minister', 'newspaperss-tr') . '</p>
            <!-- /wp:paragraph --></div></div>
            <!-- /wp:cover -->
           ',
        )
    );

    register_block_pattern(
        'newspapersstr/search-section-newspapersx',
        array(
            'title'      => __('Search Section', 'newspaperss-tr'),
            'categories' => array('newspapersstr'),
            'content'    => ' <!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"20px","bottom":"50px","left":"20px"}}},"backgroundColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-cyan-bluish-gray-background-color has-background" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"20px"}}},"textColor":"black","className":"wp-block-heading","fontSize":"medium"} -->
            <h2 class="has-text-align-center wp-block-heading has-black-color has-text-color has-medium-font-size" style="margin-top:20px"><strong>' . esc_html__('Oops! This page doesn’t exist.', 'newspaperss-tr') . '</strong></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph {"align":"center","textColor":"black","fontSize":"small"} -->
            <p class="has-text-align-center has-black-color has-text-color has-small-font-size">' . esc_html__('It looks like nothing was found at this location.', 'newspaperss-tr') . '</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:columns {"style":{"border":{"radius":"10px","color":"#00000078","width":"2px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"color":{"background":"#f7f7f7"}}} -->
            <div class="wp-block-columns has-border-color has-background" style="border-color:#00000078;border-width:2px;border-radius:10px;background-color:#f7f7f7;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"padding":{"top":"3px","right":"5px","bottom":"3px","left":"10px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:3px;padding-right:5px;padding-bottom:3px;padding-left:10px;flex-basis:66.66%"><!-- wp:paragraph {"textColor":"cyan-bluish-gray"} -->
            <p class="has-cyan-bluish-gray-color has-text-color">
            ' . esc_html__('Search', 'newspaperss-tr') . '</p>
            <!-- /wp:paragraph --></div>
            <!-- /wp:column -->
            
            <!-- wp:column {"verticalAlignment":"top","width":"33.33%","style":{"spacing":{"padding":{"top":"3px","right":"10px","bottom":"3px","left":"5px"}}}} -->
            <div class="wp-block-column is-vertically-aligned-top" style="padding-top:3px;padding-right:10px;padding-bottom:3px;padding-left:5px;flex-basis:33.33%"></div>
            <!-- /wp:column --></div>
            <!-- /wp:columns --></div>
            <!-- /wp:group -->
           ',
        )
    );
}
