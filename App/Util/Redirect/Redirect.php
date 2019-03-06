<?php
/**
 * Created by PhpStorm.
 * User: INSS
 * Date: 10/11/2017
 * Time: 14:47
 */

namespace App\Util\Redirect;


class Redirect
{
    private function __construct($link)
    {
        try{
            if(!header("Location:$link")){
                echo "window.location.href = \"$link\";";
            }
        }catch (\Exception $e){
            echo $e->getMessage();
        }

    }

    /**
     * Redireciona imediatamente para um link
     * @param $link
     */
    public static function para($link){
        new Redirect($link);
    }
    public static function em($segundos,$link){
        sleep($segundos);
        new Redirect($link);
    }

}