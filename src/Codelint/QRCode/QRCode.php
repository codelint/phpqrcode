<?php namespace Codelint\QRCode;


/**
 * QRCode:
 * @date 14/11/5
 * @time 14:53
 * @author Ray.Zhang <codelint@foxmail.com>
 **/

class QRCode extends \QRCode {

    static function load_qrlib()
    {
        return require_once(__DIR__ . '/phpqrcode/phpqrcode.php');
    }

    function __construct()
    {
        static::load_qrlib();
    }


    function __call($name, $arguments)
    {
        return call_user_func_array(['\QRCode', $name], $arguments);
    }
}