<?php
include "vendor/autoload.php";


$fileArr = [
    ["docs", "README.md"],
    ["docs","huawei", "华为手机添加白名单.md"],
    ["docs","samsung", "三星（带智能管理器的）如何添加白名单.md"],
    ["docs","meizu", "魅族怎么设置白名单.md"],
    ["docs","st", "锤子怎么把App加入白名单.md"],
    ["docs","vivo", "ViVo 怎么把App加入白名单.md"],
    ["docs","xiaomi", "小米怎么把你的App加入白名单.md"],
];
foreach ($fileArr as $pathArr) {
    $file_path = join("/",$pathArr ) ;
    $outFile = join("/",array_slice($pathArr,0,count($pathArr)-1))."/index.html";
    echo "\nmdFile,  outFile  $file_path, $outFile" ;
    genMarkDownHtml($file_path, $outFile);
}
echo "success";





/**
 * @param $file_path
 * @param $outFile
 * @param Parsedown $Parsedown
 */
function genMarkDownHtml($file_path, $outFile )
{
    if (file_exists($file_path)) {
        $str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
        echo $str;
        $str = str_replace("\r\n", "<br />", $str);
        $Parsedown = new Parsedown();
        fwrite(fopen($outFile, "w"), $Parsedown->text($str));
    }else{
        echo "file not found $file_path";
    }

}
?>
