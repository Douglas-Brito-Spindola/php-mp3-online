<a href="?pge=albums">Voltar para o Album <?=$_GET['album']?></a>

<h1>Cadastrar nova nova musica para o Album <?=$_GET['album']?></h1>

<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" name="audio" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $album = $_GET['album'];

    $caminho_musica = "albums/{$album}/musics/";

    if(!is_dir($caminho_musica)){
        mkdir($caminho_musica);
    }

    if(move_uploaded_file($_FILES['audio']['tmp_name'], $caminho_musica . $_FILES['audio']['name'])){
        header("Location: ?page=musics&album={$album}");
    }else{
        echo 'Falha no upload';
    }
}

?>