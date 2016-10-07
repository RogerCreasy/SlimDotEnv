<?php
/**
 * Author: Roger Creasy
 * Email: roger@rogercreasy.com
 * Date: 10/7/16
 * Time: 1:59 PM
 */

namespace RogerCreasy\SlimDotEnv;

use Dotenv\Dotenv;

class SlimDotEnv extends Dotenv
{
    public function __construct($path, $file)
    {
        parent::__construct($path, $file);
    }

    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false)
        {
            return value($default);
        }

        return strtolower($value);
    }
}