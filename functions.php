<?php
// add this into theme/{active_theme}/functions.php

add_filter( 'gettext', 'cybertron', 10, 3 );

function cybertron($translated, $untranslated, $domain) {
  if (\preg_match('/[^a-zA-Z0-9]/', $translated) && ! \str_contains($translated, '%')) {
    return esc_attr(\str_replace(
      [
        'A','B','C','D','E','F','G','H','I','J',
        'K','L','M','N','O','P','Q','R','S','T',
        'U','V','W','X','Y','Z',
        'a','b','c','d','e','f','g','h','i','j',
        'k','l','m','n','o','p','q','r','s','t',
        'u','v','w','x','y','z'
      ],
      [
        'Λ','β','Ƈ','Ð','Σ','Ƒ','Ǥ','Ή','Ϊ','Ј',
        'Ҡ','Ł','Μ','Π','Θ','Р','Ҩ','Я','Ƨ','Ŧ',
        'Ʊ','Ѵ','Ш','Ж','¥','Ƶ',
        'Λ','β','Ƈ','Ð','Σ','Ƒ','Ǥ','Ή','Ϊ','Ј',
        'Ҡ','Ł','Μ','Π','Θ','Р','Ҩ','Я','Ƨ','Ŧ',
        'Ʊ','Ѵ','Ш','Ж','¥','Ƶ'
      ],
      $translated
    ));
  }
  return $translated;
}  
