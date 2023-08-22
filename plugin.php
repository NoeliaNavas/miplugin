<?php
/**
 * Deporte Slider
 * @package           Deporte Slider
 * @author            Noelia Navas Garrido
 * @copyright         2023 Noelia Navas Garrido
 * @license           GPL-2.0-or-later
 * @link              https://github.com/NoeliaNavas/miplugin.git
 * @author            NoeliaNavas
 *
 * @wordpress-plugin
 * Plugin Name:       Deporte Slider
 * Plugin URI:        https://example.com/plugin-name
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Noelia Navas Garrido
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/Deporte-Slider/
 *  * Description: Muestra imágenes de deporte que se cambian automáticamente.
 */
function deporte_slider_shortcode() {
    ob_start();
    ?>
    <div id="deporte-slider">
        <img src="https://es.unesco.org/sites/default/files/styles/extra_large_1600x1600/public/women_and_sports_visual_940x350.png?itok=TXSbf6HBGEN_1" alt="Deporte 1">
        <img src="https://www.unesco.org/sites/default/files/styles/paragraph_medium_desktop/public/2022-08/CIGEPS_image.webp?itok=NZxJE-9h" alt="Deporte 2">
        <img src="https://phantom-marca.unidadeditorial.es/b460c427921984f4bd087b2a0211435c/resize/660/f/webp/assets/multimedia/imagenes/2023/08/20/16925603422832.jpg" alt="Deporte 3">
        <img src=https://phantom-marca.unidadeditorial.es/7112e8588a6b1c559a17972df656b96a/resize/660/f/webp/assets/multimedia/imagenes/2023/08/19/16924538914416.jpg alt="Deporte 4">
    </div>
    <script>
        jQuery(document).ready(function($) {
            var images = $('#deporte-slider img');
            var currentIndex = 0;

            function showNextImage() {
                images.hide();
                images.eq(currentIndex).fadeIn();
                currentIndex = (currentIndex + 1) % images.length;
            }

            showNextImage();
            setInterval(showNextImage, 5000); // Cambiar cada 5 segundos
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('deporte_slider', 'deporte_slider_shortcode');
