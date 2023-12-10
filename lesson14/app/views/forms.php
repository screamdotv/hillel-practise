<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
</head>
<body>
    <form action='' method='post'>
        <?php foreach ($inputs as $value): ?>
            <?php if ($value != null): ?>
                <?= $value->render() ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <br><input type='submit' value='Отправить'>
    </form>
</body>
</html>