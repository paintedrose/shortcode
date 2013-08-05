<?php

add_action('admin_menu', 'paintedrose_admin_actions');

function paintedrose_admin_actions() {
  add_options_page('PaintedRose_Shortcodes', 'PaintedRose_Shortcodes', 'manage_options', '__FILE__', 'paintedrose_admin');
}

function paintedrose_admin() {
  echo 'HELLO FROM GITHUB';
}

}

?>
