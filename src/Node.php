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
 * SCSS node
 *
 * {@internal
 *     This is a work-in-progress.
 *
 *     We are converting nodes from array('type', ...) to Node subclasses.
 * }}
 *
 * @author Anthon Pang <anthon.pang@gmail.com>
 */
abstract class Node
{
    const T_NUMBER = 'number';

    /**
     * Not yet implemented
     */
    const T_INCLUDE = 'include';
    const T_IMPORT = 'import';
    const T_EXTEND = 'extend';
    const T_RETURN = 'return';
    const T_DEBUG = 'debug';
    const T_WARN = 'warn';
    const T_ERROR = 'error';
    const T_MIXIN_CONTENT = 'mixin_content';
    const T_CHARSET = 'charset';
    const T_STRING = 'string';
    const T_ASSIGN = 'assign';
    const T_KEYWORD = 'keyword';
    const T_LIST = 'list';
    const T_MEDIA_EXPRESSION = 'mediaExp';
    const T_MEDIA_TYPE = 'mediaType';
    const T_EXPRESSION = 'exp';
    const T_UNARY = 'unary';
    const T_NULL = 'null';
    const T_FUNCTION = 'function';
    const T_FUNCTION_CALL = 'fncall';
    const T_MAP = 'map';
    const T_COLOR = 'color';
    const T_INTERPOLATE = 'interpolate';
    const T_INTERPOLATED = 'interpolated';
    const T_VARIABLE = 'var';
    const T_COMMENT = 'comment';
    const T_SELF = 'self';
    const T_BLOCK = 'block';
    const T_HSL = 'hsl';
    const T_CONTROL = 'control';
    const T_BREAK = 'break';
    const T_CONTINUE = 'continue';

    /**
     * @var string
     */
    public $type;

    /**
     * @var integer
     */
    public $sourcePosition;

    /**
     * @var \Leafo\ScssPhp\Parser
     */
    public $sourceParser;
}
