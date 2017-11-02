<?php

namespace App\Org;
//自定义图片处理类

class Image{
   private $info = array(); //被处理的图片信息
   private $srcim = null; //被处理的画布资源
   private $dstim = null; //目标画布资源（处理后的画布）
    
   //初始化方法
   public function open($pic){
        $this->info = getimagesize($pic); //获取被处理的图片信息
        //根据图片类型，使用对应的函数创建画布源。
        switch($this->info[2]){
            case 1: //gif格式
                $this->srcim = imagecreatefromgif($pic);
                break;
            case 2: //jpeg格式
                $this->srcim = imagecreatefromjpeg($pic);
                break;
            case 3: //png格式
                $this->srcim = imagecreatefrompng($pic);
                break;
           default:
                throw new Exception("无效的图片格式");
                break;
        }
        return $this;
   }
   
   //执行缩放方法
   public function thumb($maxWidth,$maxHeight){
        //获取原图片的宽和高
        $width = $this->info[0];
        $height= $this->info[1];
        // 计算缩放后的图片尺寸
        if($maxWidth/$width<$maxHeight/$height){
            $w = $maxWidth;
            $h = ($maxWidth/$width)*$height;
        }else{
            $w = ($maxHeight/$height)*$width;
            $h = $maxHeight;
        }
        //创建目标画布
        $this->dstim = imagecreatetruecolor($w,$h); 

        //5. 开始绘画(进行图片缩放)
        imagecopyresampled($this->dstim,$this->srcim,0,0,0,0,$w,$h,$width,$height);
        
        return $this;
   }
   
   //另存为
   public function save($saveFile){
        //输出图像另存为
        switch($this->info[2]){
            case 1: //gif格式
                imagegif($this->dstim,$saveFile);
                break;
            case 2: //jpeg格式
                imagejpeg($this->dstim,$saveFile);
                break;
            case 3: //png格式
                imagepng($this->dstim,$saveFile);
                break;
        }
   }
}