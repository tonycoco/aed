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
<?php // The menu class is deprecated. Use nav instead. ?>
<ul class="top-links menu<?php echo $class_sfx;?>"<?php
  $tag = '';
  if ($params->get('tag_id') != null)
  {
    $tag = $params->get('tag_id').'';
    echo ' id="'.$tag.'"';
  }
?>>
<?php
foreach ($list as $i => &$item) :
  $class = 'item-'.$item->id;

  if ($item->id == $active_id)
  {
    $class .= ' current';
  }

  if (in_array($item->id, $path))
  {
    $class .= ' active';
  }
  elseif ($item->type == 'alias')
  {
    $aliasToId = $item->params->get('aliasoptions');
    if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
    {
      $class .= ' active';
    }
    elseif (in_array($aliasToId, $path))
    {
      $class .= ' alias-parent-active';
    }
  }

  if (!empty($class))
  {
    $class = ' class="'.trim($class) .'"';
  }

  echo '<li>';

  // Render the menu item.
  echo '<a'.$class.' href="'.JFilterOutput::ampReplace(htmlspecialchars($item->flink)).'"><span>'.$item->title.'</span></a>';

  if ($item->deeper)
  {

    if ($item->menu_image)
    {
      echo '<div class="submenu-image">';
      echo '<img src="'.$item->menu_image.'" alt="'.$item->title.'" />';
      echo '</div>';
    }

    echo '<ul class="submenu-items">';
  }
  // The next item is shallower.
  elseif ($item->shallower)
  {
    echo '</li>';
    echo str_repeat('</ul></li>', $item->level_diff);
  }
  // The next item is on the same level.
  else {
    echo '</li>';
  }
endforeach;
?></ul>

<div class="subnav">
  <div class="inner">
  </div>
</div>
