<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Shape
    {
        public $length;
        public $width;
        public function_construct($length,$width)
        {
            $this->length=$length;
            $this->width=$width;
        }
    }
    class Rect extends Shape
    {
        public $height;
        public function __construct($length,$width,$height) 
        {
            $this->length =$length;
            $this->width=$width;
            $this->height=$height; 
        }
        public function intro()
        {
            echo “This length is {$this->length}, the width is {$this->width}, and the height is {$this-
            >height}”;
        } 
        $r=new Rect(10,20,30);
    } 
    $->intro();
?>
</body>
</html>