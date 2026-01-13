<?php

namespace Drupal\localgov_starterkit;

use Drupal\Core\Theme\StarterKitInterface;
use Symfony\Component\Filesystem\Filesystem;

/**
 * LocalGov Starterkit’s generator.
 */
final class StarterKit implements StarterKitInterface {

  /**
   * {@inheritdoc}
   */
  public static function postProcess(string $working_dir, string $machine_name, string $theme_name): void {
    $filesystem = new Filesystem();
    $filesystem->rename("$working_dir/.eslintrc.json.txt", "$working_dir/.eslintrc.json");
  }

}
