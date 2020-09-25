<?php

namespace Drupal\pharma_core\Controller;

/**
 * This is default controller file.
 */

class CartController {
  /**
  * Default action on page load.
  */

  public function index() {
        return [
          '#title' => 'Cart',
          '#markup' => 'No item is add in cart',
        ];
    }
}