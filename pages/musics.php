<a href="?page=albums"> Voltar para os Albums </a>
<h1> Musicas do Album <?=$_GET['album']?></h1>
<a href="?page=new_music&album=<?=$_GET['album']?>" class="btn btn-success">Adicionar Nova Musica</a>
<hr>
<?php 
 $album = $_GET['album'];
 $musics = getMusics($album);

 foreach($musics as $music):

?>

<div class="col-12">
    <audio src="<?=$music?>" controls></audio>
</div>

<?php 
endforeach 
?>