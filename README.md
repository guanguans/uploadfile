<p align="center">
    <a href="https://packagist.org/packages/guanguans/uploadfile"><img src="https://img.shields.io/packagist/v/guanguans/uploadfile.svg" alt="Version"></a>
    <a href="https://packagist.org/packages/guanguans/uploadfile"><img src="https://img.shields.io/packagist/l/guanguans/uploadfile.svg" alt="License"></a>
    <a href="https://packagist.org/packages/guanguans/uploadfile"><img src="https://img.shields.io/packagist/php-v/guanguans/uploadfile.svg" alt="PHP version"></a>
    <a href="https://github.com/guanguans/uploadfile/tags"><img src="https://img.shields.io/github/tag/guanguans/uploadfile.svg" alt="GitHub tag"></a>
</p>

# 通用文件上传类

## 安装

``` sh
composer require guanguans/uploadfile
```

## 使用

``` php
<?php
use Guanguans\UploadFile;

$upload = new UploadFile();
$upload->maxSize       = 1*1024*1024;    // 默认为-1，不限制上传大小
$upload->savePath      = './upload/';    // 上传根目录
$upload->saveRule      = 'uniqid';       // 上传文件的文件名保存规则
$upload->uploadReplace = true;           // 如果存在同名文件是否进行覆盖
$upload->autoSub       = true;           // 上传子目录开启
$upload->subType       = 'date';         // 上传子目录命名规则
$upload->allowExts     = ['jpg', 'png']; // 允许类型

if ($upload->upload()) {
    $upload->getUploadFileInfo();
} else {
    $upload->getErrorMsg();
}
```

## License

[MIT](./LICENSE)

