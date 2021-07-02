<?php
function adminer_object()
{
    // required to run any plugin
    include_once "plugins/plugins.php";

    // autoloader
    foreach (glob("plugins/*.php") as $filename) {
        include_once "./$filename";
    }

    $plugins = array(
        new AdminerFrames()
         // specify enabled plugins here
    );
    

    /* It is possible to combine customization and plugins:
      class AdminerCustomization extends AdminerPlugin {
      }
      return new AdminerCustomization($plugins);
      */

    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include "adminer.php";
