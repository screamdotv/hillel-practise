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

        $figure = empty($_POST['figure']) ? null: $_POST['figure'];
        
        if ($figure == 'square') {
            $squareHeight = (empty($_POST['height'])) ? null: $_POST['height'];
            $squareColor = (empty($_POST['color'])) ? null: $_POST['color'];

            $square = new Square(width:$squareHeight, height: $squareHeight, color: $squareColor, radius: $radius=null);

        }

        if ($figure == 'rectangel') {
            $rectangelHeight = (empty($_POST['height'])) ? null: $_POST['height'];
            $rectangelWidth = (empty($_POST['width'])) ? null: $_POST['width'];
            $rectangelColor = (empty($_POST['color'])) ? null: $_POST['color'];

            $rectangel = new Rectangle(width:$rectangelWidth, height: $rectangelHeight, color: $rectangelColor, radius: $radius=null);
            
        }

        if ($figure == 'circle') {
            $circleHeight = (empty($_POST['height'])) ? null: $_POST['height'];
            $circleColor = (empty($_POST['color'])) ? null: $_POST['color'];
            
            $circle = new Circle(width: $circleHeight, height: $circleHeight, color: $circleColor, radius: $radius = 50);

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
        <?php if(isset($square) && $squareHeight > 0): ?>
            <?= $square->draw(width:$squareHeight, height: $squareHeight, color: $squareColor, radius: $radius)?><br>
            <?= "Периметр: " . $square->perimeter() . " cм"?><br>
            <?= "Площа: " . $square->area() . " см2"?><br>
        <?php elseif (isset($square) && $squareHeight < 0): ?>
            <p style="color: red;"><?= "Значення повинні бути не відємним числом  " . $squareHeight?></p>
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
    <?php if(isset($rectangel) && ( $rectangelWidth > 0 && $rectangelHeight > 0)): ?>
        <?= $rectangel->draw(width:$rectangelWidth, height: $rectangelHeight, color: $rectangelColor, radius: $radius)?><br>
        <?= "Периметр: " . $rectangel->perimeter() . " cм"?><br>
        <?= "Площа: " . $rectangel->area() . " см2"?><br>
        <?php elseif (isset($rectangel) && ( $rectangelWidth < 0 || $rectangelHeight < 0)): ?>
            <p style="color: red;"><?= "Значення повинні бути не відємним числом " . $rectangelWidth. " " . $rectangelHeight?></p>
        <?php endif; ?>
    <hr>
    <form action="" method="post">
        <p>Коло</p>
        <label>Діаметр (см):</label><br>
        <input type="number" name="height" style="margin-bottom: 16px;"></label><br>
        <label>Колір:</label><br>
        <input type="color" name="color" style="margin-bottom: 16px;"></label><br>
        <button name="figure" value="circle" style="margin-bottom: 20px;">Намалювати фігуру</button>
    </form>
    <?php if(isset($circle) && $circleHeight > 0): ?>
        <?= $circle->draw(width: $circleHeight, height: $circleHeight, color: $circleColor, radius: $radius)?><br>
        <?= "Периметр: " . $circle->perimeter() . " cм"?><br>
        <?= "Площа: " . $circle->area() . " см2"?><br>
    <?php elseif (isset($circle) && $circleHeight < 0): ?>
        <p style="color: red;"><?= "Значення повинні бути не відємним числом " . $_POST['height']?></p>
    <?php endif; ?>
    
    <hr>
</body>
</html>