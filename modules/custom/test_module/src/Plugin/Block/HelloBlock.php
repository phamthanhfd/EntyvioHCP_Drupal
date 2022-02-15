<?php

namespace Drupal\test_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "mycustom_block",
 *   admin_label = @Translation("My custom block"),
 *   category = @Translation("Here is My custom block"),
 * )
 */
class HelloBlock extends BlockBase {

    /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'hello_block',
      '#data' => ['age' => '31', 'DOB' => '2 May 2000'],
    ];
  }

}

