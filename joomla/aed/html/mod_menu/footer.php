<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<?php
echo '<ul class="column">';

foreach ($list as $i => &$item) :
  $class = 'item-'.$item->id;

  if ($item->deeper) {
    echo '<ul class="column">';
  }
  elseif ($item->shallower) {
    // nothing
  } else {
    echo '<ul class="column">';
  }

  echo '<li>';
  echo '<a href="'.JFilterOutput::ampReplace(htmlspecialchars($item->flink)).'">'.$item->title.'</a>';
  echo '</li>';

  if ($item->deeper) {
    // nothing
  } elseif ($item->shallower){
    echo '</ul>';
  } else {
    echo '</ul>';
  }
endforeach;
?>
