<?php
    function playerinfo($type,$name,$placeholder,$value){
                $inputElement = "<div class=\"form-group my-4\">
                                    <input type='$type' name='$name' placeholder='$placeholder' value='$value' class=\"form-control\">
                                </div>";
                echo $inputElement;
    }
?>