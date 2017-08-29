<?php

namespace Drupal\proj_me_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'DebugAcademy' block.
 *
 * @Block(
 *  id = "debug_academy_block",
 *  admin_label = @Translation("Debug Academy Block"),
 * )
 */
class DebugAcademy extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['debug_academy_block']['#markup'] = 'Template programmed by students of the career-changing <a href="http://debugacademy.com/">Debug Academy.</a>';

    return $build;
  }

}
