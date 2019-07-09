<?php
/**
 * Created by PhpStorm.
 * User: gpiproject
 * Date: 5/27/19
 * Time: 12:27 PM
 */

namespace App\Utilities;


interface ImageWriterInterface
{
    function getExtension($file);

    function newFileName($file);

    public function write($file);

    public function delete($file);
}