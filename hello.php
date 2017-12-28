<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        $beautiful = 'Rajshahi';
    
        $cities = array('Dhaka', 'Rajshahi', 'khulna', 'Barishal');

    
    ?>
    
   <?php if($beautiful == 'Rajshahi' ) : ?>

       <h1>most beautifull city is rajshahi</h1>
       
       <?php else : ?>
       <h1>we don't know</h1>

   <?php endif; ?>
   
   
    <?php 

        if($beautiful == 'Dhaka'){
            echo '<h1>most beautifull city is rajshahi</h1>';
        }else{
            echo '<h1>we don\'t know</h1>';
        }
    
        echo '<h1>second city is '.$cities[1].'</h1>';
    
        if($cities[3] == 'Dhaka') {
            
        } else {
            
        }
    
    ?>

    

    
    
</body>
</html>