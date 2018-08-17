<?php
/**
 * @package    mod_google_map_wait_to_load
 *
 * @author     Eoin <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

// This is the default layout.  It is decided by mod_starter_module.php.
// To change a layout, install the module, open it, go to advanced and choose a new layout from the dropdown.

// the name of the module.  In this case mod_start_module.  We use this variable so we can reuse this module in the future and rename it.
$moduleName = $module->module;

// Ensure jQuery gets loaded before my module.  If needed.  If not, you can safely delete this line.
JHtml::script('jui/jquery.min.js', false, true);

// Add a stylesheet.
// Do not add unless (a) it exists, (b) it has a file size greater than 0.  This means an empty file will not be loaded.
// The files in this document are just for show, and Won't be loaded unecessarily, which is great, because we can leave them there
// and if we ever need CSS or JS in the future it's really easy for us to remember how to do it.
// These files will be auto incremented with the version number too.  This is a cache buster particularly useful for CDNs.
$mediaUrl = 'media/' . $moduleName;
if (file_exists($mediaUrl . '/css/' . $moduleName . '.css') && filesize($mediaUrl . '/css/' . $moduleName . '.css') > 0)
{
	$document = JFactory::getDocument();
	$document->addStyleSheet($mediaUrl . '/css/' . $moduleName . '.css', array('version' => 'auto'));
}

// Add JS.  As above.
if (file_exists($mediaUrl . '/js/' . $moduleName . ".js") && filesize($mediaUrl . '/js/' . $moduleName . ".js") > 0)
{
	$document = JFactory::getDocument();
	$document->addScript($mediaUrl . '/js/' . $moduleName . ".js", "text/javascript", true, false, array('version' => 'auto'));
}


// Access to module parameters.  don't forget to add more as you add them to your XML file.
$domain            = $params->get('domain');
?>

<!-- Create a dive with a class that is the same as the module name.  That way if we want to change any CSS we can select only this module if we need to.
It also helps us to remember which module on the page is doing what. -->

<div class="<?php echo $moduleName ?>">
    <p>
        <!-- Echo some translated text.  You can see what this text says by looking in the language folder and the en-GB.mod_starter_module.ini file.
        to create more strings copy that format.  You should use language strings for all text.
        To create a new language just create a new folder with the right name and then copy and paste the en-GB xxx.ini files and rename to the correct language. -->
	    <?php echo JText::sprintf('MOD_STARTER_MODULE_TRANSLATABLE_TEXT'); ?>
    </p>
    <p>
        <!-- Echo one of the module parameters.  Then echo the module name.-->
		<?php echo $domain; ?> - <?php echo $moduleName; ?>
    </p>
</div>