<?php
/**
 * Part of the Joomla Framework Image Package
 *
 * @copyright  Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Image\Filter;

use Joomla\Image\Filter;

/**
 * Image Filter class to negate the colors of an image.
 *
 * @since  1.0
 */
class Negate extends Filter
{
	/**
	 * Method to apply a filter to an image resource.
	 *
	 * @param   array  $options  An array of options for the filter.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function execute(array $options = array())
	{
		// Perform the negative filter.
		imagefilter($this->handle, IMG_FILTER_NEGATE);
	}
}
