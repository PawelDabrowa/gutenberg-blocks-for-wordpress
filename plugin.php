<?php
/**
* Plugin Name: fox-theme-blocks
* Plugin URI:
* Description: Blocks for Fox Themes.
* Author: Pawel Dabrowa
*/

if(!defined('ABSPATH')) {
    exit;
}

function fox_theme_blocks_register_block_type($block, $options = array()) {
    register_block_type(
        'fox-theme-blocks/' . $block,
        array_merge(
            array(
                'editor_script' => 'fox-theme-blocks-editor-script',
                'editor_style' => 'fox-theme-blocks-editor-style',
                'script' => 'fox-theme-blocks-script',
                'style' => 'fox-theme-blocks-style',
            ),
            $options
        )
    );
}

function fox_theme_blocks_register() {

    wp_register_script(
        'fox-theme-blocks-editor-script',
        plugins_url('dist/editor.js', __FILE__),
        array( 'wp-blocks','wp-i18n','wp-element')
    );

    wp_register_script(
        'fox-theme-blocks-script',
        plugins_url('dist/script.js', __FILE__),
        array('jquery')
    );

    wp_register_style(
        'fox-theme-blocks-editor-style',
        plugins_url('dist/editor.css', __FILE__),
        array('wp-edit-blocks')
    );

    wp_register_style(
        'fox-theme-blocks-style',
        plugins_url('dist/style.css', __FILE__)
    );

    fox_theme_blocks_register_block_type('firstblock');
    fox_theme_blocks_register_block_type('secondblock', array());
}

add_action('init','fox_theme_blocks_register' );