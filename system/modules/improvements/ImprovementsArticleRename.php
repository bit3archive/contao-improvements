<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Improvements for Contao Open Source CMS
 * Copyright (C) 2011 Tristan Lins
 *
 * Extension for:
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 * 
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  2create 2011
 * @author     Leo Unglaub <leo@leo-unglaub.net>
 * @package    (Home) Improvements ;)
 * @license    LGPL
 * @filesource
 */


/**
 * Class ImprovementsArticleRename
 */
class ImprovementsArticleRename extends Backend
{
	public function doRename($varValue, DataContainer $dc)
	{
		$this->import('Database');

		$objDbArticle = $this->Database->prepare('SELECT id FROM tl_article WHERE pid=? AND title=?')
									   ->execute($dc->activeRecord->id, $dc->activeRecord->title);

		if ($objDbArticle->numRows >= 1)
		{
			foreach ($objDbArticle->fetchEach('id') as $v)
			{
				$strAlias = standardize($varValue);
				
				// check if the alias exists
				$objAlias = $this->Database->prepare('SELECT id FROM tl_article WHERE alias=?')
										   ->limit(1) // limit because we only need one to generate a new alias
										   ->execute($strAlias);
				
				if ($objAlias->numRows >= 1)
				{
					$strAlias .= '-' . $objAlias->id;
				}
				
				$this->Database->prepare('UPDATE tl_article %s WHERE id=?')
							   ->set(array('title'=>$varValue,'alias'=>$strAlias))
							   ->execute($v);
			}
		}
		return $varValue;
	}
}
?>