# wp-clipboard-append 
 
Podczas kopiowania tekstu do schowka systemowego automatycznie zostanie doklejony wskazany tekst. Do skonfigurowania poprzez filtry minimalna długość kopiowanego tekstu po której przekroczeniu wskazany tekst się doklei oraz treść komunikatu doklejanego do schowka.

Przykładowa konfiguracja w functions.php:


add_filter('clipboard_append_minimum_length', function($length) {

        return 200; // minimalna długość kopiowanego musi wynosić powyżej X znaków aby tekst się dokleił do treści
});

add_filter('clipboard_append_text', function($text) {

        return 'Tutaj Twój tekst do doklejenia przy kopiowaniu do schowka';
});


![screenshot](/screenshot.png?raw=true "screenshot") 
