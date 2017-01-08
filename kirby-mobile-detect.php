<?php
/**
 * Plugin
 * Simple Implementation of Mobile Device detection for Kirby
 *
 * @author      Sonja Broda
 *
 * @copyright   2017 Sonja Broda
 * @link        https://github.com/texnixe
 * @license     https://texniq.de
 * @ref         https://github.com/serbanghita/Mobile-Detect
 */

require __DIR__ . '/vendor/autoload.php';

function detect() {
  if(class_exists('Mobile_Detect')) {
    return new Mobile_Detect();
  }
};
