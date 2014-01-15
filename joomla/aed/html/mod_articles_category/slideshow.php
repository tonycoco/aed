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
  <img data-title="<?php echo $item->title; ?>" data-url="<?php echo $item->link; ?>" src="<?php echo htmlspecialchars($images->image_intro); ?>" />
<?php endforeach; ?>
