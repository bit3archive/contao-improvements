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


/**
 * Wrapper functions
 */
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'base64_encode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'base64_decode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'rawurldecode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'rawurlencode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'urldecode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'urlencode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'crc32';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'crypt';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'html_entity_decode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'htmlentities';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'htmlspecialchars_decode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'htmlspecialchars';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'lcfirst';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'ltrim';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'md5';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'nl2br';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'ord';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'quoted_printable_decode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'quoted_printable_encode';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'quotemeta';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'rtrim';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'sha1';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'soundex';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'str_rot13';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'str_shuffle';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'str_split';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'str_word_count';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'strip_tags';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'stripcslashes';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'stripslashes';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'strlen';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'strrev';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'strtolower';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'strtoupper';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'trim';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'ucfirst';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'ucwords';
$GLOBALS['TL_INSERTTAG_WRAPPER'][] = 'wordwrap';


/**
 * HOOKs
 */
$GLOBALS['TL_HOOKS']['outputBackendTemplate'][] = array('Improvements', 'hookOutputBackendTemplate');
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('Improvements', 'hookReplaceInsertTags');

?>