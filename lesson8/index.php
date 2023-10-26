<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Малювання фігур</title>
</head>
<body>
    <?php
        require_once 'Square.php';
        require_once 'Rectangle.php';
        require_once 'Circle.php';

        $square = null;
        $rectangel= null;
        $circle = null;

        $figure = empty($_POST['figure']) ? null: $_POST['figure'];
        
        if ($figure == 'square') {
            $squareHeight = (empty($_POST['height'])) ? null: $_POST['height'];
            $squareColor = (empty($_POST['color'])) ? null: $_POST['color'];
            
            if(isset($squareHeight) && ($squareHeight > 0)){
                $square = new Square(width:$squareHeight, height: $squareHeight, color: $squareColor);
            }
        }

        if ($figure == 'rectangel') {
            $rectangelHeight = (empty($_POST['height'])) ? null: $_POST['height'];
            $rectangelWidth = (empty($_POST['width'])) ? null: $_POST['width'];
            $rectangelColor = (empty($_POST['color'])) ? null: $_POST['color'];
            
            if((isset($rectangelHeight) && ($rectangelHeight > 0)) && (isset($rectangelWidth) && ($rectangelWidth > 0))){
                $rectangel = new Rectangle(width:$rectangelWidth, height: $rectangelHeight, color: $rectangelColor);
            }
        }

        if ($figure == 'circle') {
            $circleRadius = (empty($_POST['radius'])) ? null: $_POST['radius'];
            $circleColor = (empty($_POST['color'])) ? null: $_POST['color'];
            
            if(isset($circleRadius) && ($circleRadius > 0)){
                $circle = new Circle(radius: $circleRadius, color: $circleColor);
            }
        }
    ?>
    <div>
        <form action="" method="post">
            <p>Квадрат</p>
            <label>Висота (см):</label><br>
            <input type="number" name="height" style="margin-bottom: 16px;"><br>
            <label>Колір:</label><br>
            <input type="color" name="color" style="margin-bottom: 16px;"><br>
            <button name="figure" value="square" style="margin-bottom: 20px;">Намалювати фігуру</button>
        </form>
        <?php if($square): ?>
        <?= $square->draw()?><br>
        <p>Периметр: <?= $square->perimeter() ?> cм2</p>
        <p>Площа: <?= $square->area() ?> см3</p>
        <?php else: ?>
            <p style="color: red;">Значення повинні бути не відємним числом</p>
        <?php endif; ?>
    </div>
    <hr>
    <form action="" method="post">
        <p>Прямокутник</p>
        <label>Висота (см):</label><br>
        <input type="number" name="height" style="margin-bottom: 16px;"></label><br>
        <label>Ширина (см):</label><br>
        <input type="number" name="width" style="margin-bottom: 16px;"><br>
        <label>Колір:</label><br>
        <input type="color" name="color" style="margin-bottom: 16px;"></label><br>
        <button name="figure" value="rectangel" style="margin-bottom: 20px;">Намалювати фігуру</button>
    </form>
    <?php if($rectangel): ?>
        <?= $rectangel->draw()?><br>
        <p>Периметр: <?= $rectangel->perimeter() ?> cм2</p>
        <p>Площа: <?= $rectangel->area() ?> см3</p>
        <?php else: ?>
            <p style="color: red;">Значення повинні бути не відємним числом</p>
        <?php endif; ?>
    <hr>
    <form action="" method="post">
        <p>Коло</p>
        <label>Радіус (см):</label><br>
        <input type="number" name="radius" style="margin-bottom: 16px;"></label><br>
        <label>Колір:</label><br>
        <input type="color" name="color" style="margin-bottom: 16px;"></label><br>
        <button name="figure" value="circle" style="margin-bottom: 20px;">Намалювати фігуру</button>
    </form>
    <?php if($circle): ?>
        <?= $circle->draw()?><br>
        <p>Периметр: <?= $circle->perimeter() ?> cм2</p>
        <p>Площа: <?= $circle->area() ?> см3</p>
    <?php else: ?>
        <p style="color: red;">Значення повинні бути не відємним числом</p>
    <?php endif; ?>
    <hr>
</body>
</html>