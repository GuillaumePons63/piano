<?php
/*
Plugin Name: SimplePiano
Description: Plugin qui permet d'afficher un piano grâce à un shortcode
Author: Guillaume Pons - guillaume@web-63.fr
Version: 1
*/

function shortcode_piano() {
    wp_register_style('piano', '/wp-content/plugins/piano/main.css', array(), '1.0', 'all');
    wp_enqueue_style('piano');
    wp_register_script('piano','/wp-content/plugins/piano/main.js',array(),'1.0');
    wp_enqueue_script('piano');
    return "
    <div id='main'>
        <div class='keys'>        
            <div class='key' data-note='q'></div>
            <div class='key sharp' data-note='z'></div>
            <div class='key' data-note='s'></div>
            <div class='key sharp' data-note='e'></div>
            <div class='key' data-note='d'></div>
            <div class='key' data-note='f'></div>
            <div class='key sharp' data-note='t'></div>
            <div class='key' data-note='g'></div>
            <div class='key sharp' data-note='y'></div>
            <div class='key' data-note='h'></div>
            <div class='key sharp' data-note='u'></div>
            <div class='key' data-note='j'></div>
            <div class='key' data-note=,k,></div>
            <div class='key sharp' data-note='o'></div>
            <div class='key' data-note='l'></div>
            <div class='key sharp' data-note='p'></div>
            <div class='key' data-note='m'></div>
        </div>
            <audio src='../wp-content/plugins/piano/sounds/q.mp3' data-note='q' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/z.mp3' data-note='z' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/s.mp3' data-note='s' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/e.mp3' data-note='e' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/d.mp3' data-note='d' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/f.mp3' data-note='f' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/t.mp3' data-note='t' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/g.mp3' data-note='g' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/y.mp3' data-note='y' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/h.mp3' data-note='h' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/u.mp3' data-note='u' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/j.mp3' data-note='j' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/k.mp3' data-note='k' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/o.mp3' data-note='o' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/l.mp3' data-note='l' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/p.mp3' data-note='p' preload='auto'></audio>
            <audio src='../wp-content/plugins/piano/sounds/m.mp3' data-note='m' preload='auto'></audio>
    </div>
    ";   
    
}

add_shortcode('simplePiano','shortcode_piano');