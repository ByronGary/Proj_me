<?php

namespace Drupal\proj_me_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CallToAction' block.
 *
 * @Block(
 *  id = "call_to_action_block",
 *  admin_label = @Translation("Call To Action Block"),
 * )
 */
class CallToAction extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['call_to_action_block']['#markup'] = '<div id="calltoactionblock"><p class="action p">Interested in working together?  <a class="Call to Action" href="#">lets build something awesome</p></a></div>';

    return $build;
  }

}
