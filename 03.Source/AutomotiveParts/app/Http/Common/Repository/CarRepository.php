<?php
/**
 * Created by PhpStorm.
 * User: ManhNV
 * Date: 09/07/2018
 * Time: 08:56
 */
namespace App\Http\Common\Repository;

interface CarRepository
{
    /**
     * @param $status
     * @return mixed
     */
    function getAllWithActive($status);
}
