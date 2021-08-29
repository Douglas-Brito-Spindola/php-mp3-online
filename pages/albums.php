<h1>Álbum</h1>

<a href="?page=new_album" class="btn btn-success">Adicionar Novo Album</a>
<hr>
<div class="row">

    <?php
    $albums = getAlbums();

    foreach( $albums as $album):

        $info_album = explode('/', $album);
        $nome_album = $info_album[1];

        $imagem_album = "{$album}/{$nome_album}.jpg";
    ?>

    <div class="col-3" class="album">
        <a href="?page=musics&album=<?=$nome_album?>">
            <img src="<?=$imagem_album?>" alt="<?=$nome_album?>" class="img-album"> 
            <h4><?=$nome_album?></h4>
        </a> 
    </div>

    <?php endforeach?>
</div>