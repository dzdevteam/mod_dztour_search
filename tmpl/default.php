<?php
/**
 * @version     1.0.0
 * @package     mod_dztour_search
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      DZ Team <support@dezign.vn> - dezign.vn
 */
 
// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.framework');
JHtml::_('formbehavior.chosen', 'select');
?>
<script type="text/javascript">
   js = jQuery.noConflict();
        
   js(document).ready(function() {
             
      js('#btn-search').click(function() {
        js('#search-form').submit();
      });
      
      js('#btn-clear').click(function() {
        js('#mod-search-searchword').val("");
        js("option[value='']").attr('selected', 'selected'); 
        js('#search-form').submit();  
      });
    });
     
</script>
<div class="dztour_search-module<?php echo $moduleclass_sfx; ?>">
    <div class="row">
        <form id="search-form" action="<?php echo JRoute::_(DZTourHelperRoute::getSearchRoute());?>" method="post">
            <div class="btn-toolbar">
                <div class="btn-group">
                    <input name="filter_search" id="mod-search-searchword" class="type-field" type="text" value="<?php echo $text; ?>"  onblur="if (this.value=='') this.value='<?php echo $text; ?>';" onfocus="if (this.value=='<?php echo $text; ?>') this.value='';" />
                </div>
                <div class="btn-group">
                    <select name="filter_locationid" id="filter.locationid">
                        <option value=""><?php echo JText::_('MOD_DZTOUR_SEARCH_CHOOSE_LOCATION');?></option>
                        <?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_dztour.tours.locationid'), "value", "text", $locationid); ?>
                    </select>
                </div>
                <div class="btn-group">
                    <select name="filter_typeid" id="filter.typeid">
                        <option value=""><?php echo JText::_('MOD_DZTOUR_SEARCH_CHOOSE_TYPE');?></option>
                        <?php echo JHtml::_('select.options', JHtml::_('category.options', 'com_dztour.tours.typeid'), "value", "text", $typeid); ?>
                    </select>
                </div>
                <div class="btn-group">
                    <button class="btn btn-primary" id="btn-search" type="submit"><?php echo JHtml::tooltipText('JSEARCH_FILTER_SUBMIT'); ?></button>
                    <button class="btn btn-default" id="btn-clear" type="button"><?php echo JHtml::tooltipText('JSEARCH_FILTER_CLEAR'); ?></button>
                </div>
            </div>            
            <input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
        </form>
    </div>
</div>