<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Web357test
 * @author     Web357 Dev <careers@web357.com>
 * @copyright  2025 Web357.com
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Webtest\Component\Web357test\Administrator\Extension;

defined('JPATH_PLATFORM') or die;

use Webtest\Component\Web357test\Administrator\Service\Html\WEB357TEST;
use Joomla\CMS\Application\SiteApplication;
use Joomla\CMS\Association\AssociationServiceInterface;
use Joomla\CMS\Association\AssociationServiceTrait;
use Joomla\CMS\Categories\CategoryServiceTrait;
use Joomla\CMS\Component\Router\RouterServiceInterface;
use Joomla\CMS\Component\Router\RouterServiceTrait;
use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\HTML\HTMLRegistryAwareTrait;
use Joomla\CMS\Tag\TagServiceTrait;
use Psr\Container\ContainerInterface;
use Joomla\CMS\Categories\CategoryServiceInterface;

/**
 * Component class for Web357test
 *
 * @since  1.0.0
 */
class Web357testComponent extends MVCComponent implements RouterServiceInterface, BootableExtensionInterface, CategoryServiceInterface
{
	use AssociationServiceTrait;
	use RouterServiceTrait;
	use HTMLRegistryAwareTrait;
	use CategoryServiceTrait, TagServiceTrait {
		CategoryServiceTrait::getTableNameForSection insteadof TagServiceTrait;
		CategoryServiceTrait::getStateColumnForSection insteadof TagServiceTrait;
	}

	/** @inheritdoc  */
	public function boot(ContainerInterface $container)
	{
		$db = $container->get('DatabaseDriver');
		$this->getRegistry()->register('web357test', new WEB357TEST($db));
	}

	
/**
 * Returns the table for the count items functions for the given section.
	 *
	 * @param   string    The section
	 *
	 * * @return  string|null
	 *
	 * @since   4.0.0
	 */
	    protected function getTableNameForSection(string $section = null)            
	{
	}
	
	/**
     * Adds Count Items for Category Manager.
     *
     * @param   \stdClass[]  $items    The category objects
     * @param   string       $section  The section
     *
     * @return  void
     *
     * @since   4.0.0
     */
    public function countItems(array $items, string $section)
    {
	}
}