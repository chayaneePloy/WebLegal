<?php
/**
 * Created by PhpStorm.
 * User: Nasar
 * Date: 2019-05-20
 * Time: 2:37 PM
 */

class Helper
{
    public static function AddFilePath($directory,$file){
        switch (strlen($directory)){
            case "shared":
                return '../Shared'.$file;
            case '':
                return ''.$file;
        }
    }
}