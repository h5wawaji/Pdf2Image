<?php
# 测试pdf转png
# 前提
## 安装 php 扩展 imagemagick 可以 在bt 安装 
## yum install -y ghostscript 
$im = new imagick('1.pdf[0]');
$im->setImageFormat('png');
header('Content-Type: image/png');// jpg 很差
echo $im;
?>
