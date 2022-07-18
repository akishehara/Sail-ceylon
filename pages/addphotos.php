<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styleup.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        
        <h1> Upload photos</h1>
        <form class="form9" method="POST" action="uploadphotos.php">

            <h2><b><?php if (isset($_GET['errors'])){ ?>
                <div class="errors"  ><?php echo $_GET['errors'];?></div>
                <?php }?></b></h2><br>

            <input type="text" name ="name" value="name">
            <input type="text" name ="email"  placeholder="e-mail">
            <textarea name="desc" class="field-style" cols="30" rows="10" placeholder="Description"></textarea> 
            <input type="file" name="uploadfile">
            <input type="submit" name="uploadfilesub" value="upload">

        </form>
       



    </div>
    
</body>
</html>
<?php
?>