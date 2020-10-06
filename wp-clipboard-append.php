<?php
/*
Plugin Name: Doklejanie do schowka systemowego
Description: Podczas kopiowania tekstu do schowka systemowego automatycznie zostanie doklejony wskazany tekst.
Author: Sebastian Bort
Version: 1.0.0
*/
class WP_Clipboard_Append {

      const js_handler = 'clipboard-append';
      
      const default_min_length = '100';
      const default_text = 'Twój tekst do doklejenia do schowka systemowego';

      public function __construct() {  
           
            add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
      }
      
      public function enqueue_scripts() {  
           
            wp_enqueue_script(self::js_handler, plugin_dir_url(__FILE__) . '/wp-clipboard-append.js', ['jquery']);
            
            $options = [
                'minimum_length' => apply_filters('clipboard_append_minimum_length', self::default_min_length),
                'text' => apply_filters('clipboard_append_text', self::default_text),
            ];
            
            wp_localize_script(self::js_handler, 'ClipboardAppend', $options);
      }

}
new WP_Clipboard_Append();

?>