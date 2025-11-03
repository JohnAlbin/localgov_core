<?php

namespace Drupal\localgov_starterkit;

use Drupal\Core\Theme\StarterKitInterface;

/**
 * LocalGov Starterkit’s generator.
 */
final class StarterKit implements StarterKitInterface {

  /**
   * {@inheritdoc}
   */
  public static function postProcess(string $working_dir, string $machine_name, string $theme_name): void {
    $readme_file = "$working_dir/README.md";
    try {
      file_put_contents($readme_file, "$theme_name theme, generated from localgov_starterkit. Additional information on generating themes   can be found in your new theme’s README.");
    }
    catch (\Throwable $th) {
    }
  }

}
