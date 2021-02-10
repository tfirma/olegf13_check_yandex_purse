<?php

namespace Olegf13;

include 'checkYandexPurse.php';

class YandexPurse
{

    public static function check($purse)
    {
        return checkYandexPurse($purse);
    }

}
