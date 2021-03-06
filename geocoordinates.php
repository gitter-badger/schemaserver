<?php
/**
 * @author Chris Zuber <chris@chriszuber.com>
 * @package shgysk8zer0/schemaserver
 * @copyright 2017
 * @license https://opensource.org/licenses/LGPL-3.0 GNU Lesser General Public License version 3
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3.0 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library.
 */
namespace shgysk8zer0\SchemaServer;
/**
 * @see https://schema.org/GeoCoordinates
 */
class GeoCoordinates extends StructuredValue
{
	use Traits\Address;

	/**
	 * [setAddressCountry description]
	 * @param [type] $country [description]
	 */
	final public function setAddressCountry(Country $country)
	{
		$this->_set('addressCountry', $country);
	}

	/**
	 * [setElevation description]
	 * @param Float $elevation [description]
	 */
	final public function setElevation(Float $elevation)
	{
		$this->_set('elevation', $elevation);
	}

	/**
	 * [setLatitude description]
	 * @param Float $latitude [description]
	 */
	final public function setLatitude(Float $latitude)
	{
		$this->_set('latitude', $latitude);
	}

	/**
	 * [setLongitude description]
	 * @param Float $longitude [description]
	 */
	final public function setLongitude(Float $longitude)
	{
		$this->_set('longitude', $longitude);
	}

	/**
	 * [setPostalCode description]
	 * @param Int $postal_code [description]
	 */
	final public function setPostalCode(Int $postal_code)
	{
		$this->_set('postalCode', $postal_code);
	}
}
