<?php

namespace Drupal\pharma_core\Plugin\Block;

 /**
 * Displaying top menu item in theme.
 */
use Drupal\Core\Block\BlockBase;

/** 
  * Provide a block for custom top menu on theme.
  *
  * @Block(
  *
  * id = "pharma_topmenu",
  * admin_label = @Translation("Top Menu"),
  * category =  @Translation("Pharma"), 
  *)
  */

class TopMenuBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'topmenu',
      '#item_count' => 2,
    ];
  }
 }