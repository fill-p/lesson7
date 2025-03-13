<?php
require 'Figure.php';
require 'Square.php';
require 'Rectangle.php';
require 'Circle.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Малювання фігур</title>
    </head>
    <body>
    <?php
        $Figure = null;
        $width = isset($_POST['width']) ? $_POST['width'] : 10;
        $height = isset($_POST['height']) ? $_POST['height'] : 5;
        $radius = isset($_POST['radius']) ? $_POST['radius'] : 10;
        $color = isset($_POST['color']) ? $_POST['color'] : "#000000";

        if (!empty($_POST['width']) && empty($_POST['height']) && empty($_POST['radius'])) {
            $Figure = new Square($width, $color);
        } elseif (!empty($_POST['width']) && !empty($_POST['height'])) {
            $Figure = new Rectangle($width, $height, $color);
        } elseif (!empty($_POST['radius'])) {
            $Figure = new Circle($radius, $color);
        }
    ?>
    </body>
    <p>Квадрат</p>
    <form method = "POST">
        <input type = "number" id = "widthS" name = "width" value = "<?php echo $width; ?>">
        <input type = "color"  id = "colorS" name = "color" value="<?php echo $color; ?>">
        <input type = "submit" value = "Намалювати">
    </form>
    <p>Прямокутник</p>
    <form method = "POST">
        <input type = "number" id = "widthR"  name = "width" value = "<?php echo $width; ?>">
        <input type = "number" id = "heightR" name = "height" value = "<?php echo $height; ?>">
        <input type = "color"  id = "colorR"  name = "color" value="<?php echo $color; ?>">
        <input type = "submit" value = "Намалювати">
    </form>
    <p>Коло</p>
    <form method = "POST">
        <input type = "number" id = "radiusC" name = "radius" value = "<?php echo $radius; ?>">
        <input type = "color"  id = "colorC"  name = "color" value="<?php echo $color; ?>">
        <input type = "submit" value = "Намалювати">
    </form>
    <?php 
        if ($Figure !== null) { 
        ?>
        <p>Результат</p>
        <div <?php echo $Figure->paint()?>></div>
        <p>Площа фігури: <?php echo $Figure->square()?></p>
        <p>Периметр фігури: <?php echo $Figure->perimeter()?></p>
        <?php 
        } 
    ?>
</html>
