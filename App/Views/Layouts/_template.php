<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($data['title'])){echo $data['title'];}else{echo "page";}?></title>
</head>
<body>
    <h1>Pagina Principal</h1>
    
    <?php 
    if(isset($data[0]['nomb_emp'])){$name=$data[0]['nomb_emp'];}else{$name="Cosme Fulanito";}
    includeView('welcome',['name'=>$name]) ?>       
</body>
</html>