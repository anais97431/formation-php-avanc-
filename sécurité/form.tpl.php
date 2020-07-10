<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commentaire</title>
</head>
<body>
    <h1>Commentaire</h1>
    <?php foreach($errors as $error):?>

        <p><?= $error ?></p>
    <?php endforeach; ?>

    <form method="POST">
        <div>
            <label for="comment_body">Corps</label>
            <input type="text" name="body" id="comment_body">
        </div>
        <input type="hidden" name="token" value="<?= $token ?>"> <!--le = correspond au echo-->
        <button>Envoyer</button>
    </form>
</body>
</html>