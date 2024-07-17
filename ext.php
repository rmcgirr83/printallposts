<?php
/**
*
* @package Print all posts in a topic
* @copyright (c) 2020 Rich McGirr(RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace rmcgirr83\printallposts;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/**
	* Enable extension if phpBB version requirement is met
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return version_compare($config['version'], '3.3', '>=');
	}
}
