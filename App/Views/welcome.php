<div>
    <h1>Hello World <?= $data['name']; if(isset($data['id'])){$data['id'];}?></h1>

    <form action="<?= route(WELCOME_CREATE,2) ?>" method="POST">
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</div>