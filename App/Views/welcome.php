<div>
    <h1>Hello World <?= $data['name'] ?></h1>

    <form action="<?= $_SERVER['PHP_SELF'].'?class=WelcomeController&method=create' ?>" method="POST">
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</div>