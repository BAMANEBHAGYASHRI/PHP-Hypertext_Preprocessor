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
    class emp
    {
        private $fname;
        private $lname;
        public function __construct($fname,$lname)
        {
            $this->fname=$fname;
            $this->lname=$lname;
        } 
        public function showName()
        {
            echo “My name is”.$this->fname.” ”.$this->lname;
        }
    }
    $sid=new emp(“Ramesh”,”Patil”);
    $sid->showName()
    
    
    ?>
</body>
</html>