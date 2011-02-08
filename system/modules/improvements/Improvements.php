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
 * @copyright  InfinitySoft 2011
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    Improvements
 * @license    LGPL
 * @filesource
 */


class Improvements {
	public function hookOutputBackendTemplate($strContent, $strTemplate)
	{
		if ($strTemplate == 'be_main')
		{
			$strContent = str_replace('</body>', '
<script type="text/javascript">
<!--//--><![CDATA[//><!--
var e = $$(\'div.tl_formbody_edit fieldset.tl_tbox input\');
if (e && e.length > 0)
{
	e[0].focus();
}
//--><!]]>
</script>

</body>', $strContent);
		}
		return $strContent;
	}
}

?>