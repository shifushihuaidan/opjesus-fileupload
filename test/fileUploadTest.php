<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/22
 * Time: 10:55
 */

/**
$picpath="";
if (!empty($_FILES['pic']['tmp_name']))
{
require (BASE_PATH . '/lib/FileUpload.class.php');
$file = new FileUpload();
$file -> set("maxsize", 20000000);
$file -> set("allowtype", array("csv", "xlsx", "xls"));
$file->set('path', '../var/suits_subjects/excel/');
$file->upload('pic');
$picpath= $file->getFileName();
$error = $file->getErrorMsg();
if($error != ''){
show_message('文件上传失败！失败原因:'.$error);
}
}
 */
include '../vendor/autoload.php';
use Opjesus\FileUpload\FileUploadTool;
$aa = new FileUploadTool();
var_dump($aa);