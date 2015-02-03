<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 27.01.2015
 * Time: 11:43
 */

class Crudurl {

    public static function baseUrl () {

        return Kohana::$config->load('crudconfig.base_url');

    }

}