<h1>PHP Magic Constants</h1>
<h5>Here are the magic constants, with descriptions and examples:</h5>
<hr>
<small># __CLASS__ Constant</small><br><br>
<?php
    class Fruits{
       public function myfruit(){
        return __CLASS__;
       }
    }
    #If used inside a class, the class name is returned.
    $newFruits = new Fruits();
    echo $newFruits->myfruit();
?>
<br><br>
<small># __DIR__ Constant</small><br><br>
<?php
    //The directory of the file.
    echo __DIR__;
?> 
<br><br>
<small># __FILE__ Constant</small><br><br>
<?php
    echo __FILE__;
?> 
