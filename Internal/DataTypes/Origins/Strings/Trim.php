<?php namespace ZN\DataTypes\Strings;
/**
 * ZN PHP Web Framework
 * 
 * "Simplicity is the ultimate sophistication." ~ Da Vinci
 * 
 * @package ZN
 * @license MIT [http://opensource.org/licenses/MIT]
 * @author  Ozan UYKUN [ozan@znframework.com]
 */

class Trim
{
    //--------------------------------------------------------------------------------------------------------
    // mtrim
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public static function middle(String $str) : String
    {
        $str = preg_replace
        (
            ['/\s+/', '/&nbsp;/', "/\n/", "/\r/", "/\t/"],
            ['', '', '', '', ''],
            $str
        );

        return $str;
    }

    //--------------------------------------------------------------------------------------------------------
    // Trim Slashes
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $str
    //
    //--------------------------------------------------------------------------------------------------------
    public static function slashes(String $str) : String
    {
        $str = trim($str, "/");

        return $str;
    }
}
