<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<?php foreach($list as $item) : ?>
  <?php
    $imagesJSON = $item->images;
    $images = json_decode($imagesJSON);
  ?>
  <li>
    <a class="button" href="<?php echo $item->link; ?>"><?php echo $images->image_intro_alt; ?></a>
    <p><?php echo $images->image_intro_caption; ?></p>
  </li>
<?php endforeach; ?>
