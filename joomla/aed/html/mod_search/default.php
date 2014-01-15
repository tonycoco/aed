<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<form action="<?php echo JRoute::_('index.php');?>" method="post" class="form">
  <input type="hidden" name="task" value="search" />
  <input type="hidden" name="option" value="com_search" />
  <input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
  <div class="input">
    <i class="icon-search"></i>
    <input placeholder="Search" type="text" name="searchword" id="mod-search-searchword">
  </div>
</form>
