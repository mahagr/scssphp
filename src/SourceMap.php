<?php
/**
 * SCSSPHP
 *
 * @copyright 2012-2015 Leaf Corcoran
 *
 * @license http://opensource.org/licenses/MIT MIT
 *
 * @link http://leafo.github.io/scssphp
 */

namespace Leafo\ScssPhp;

/**
 * SCSSPHP source map
 *
 * @author Anthon Pang <anthon.pang@gmail.com>
 */
class SourceMap
{
    const AUTO = 'auto';     // relative URI's where possible
    const FILE = 'file';     // file: URIs 
    const INLINE = 'inline'; // include full source text in the source map
    const NONE = 'none';     // default
}
