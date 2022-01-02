<a href="?pge=albums">Voltar</a>

<h1>Cadastrar Novo Album</h1>
<form action="#" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="nome_album" placeholder="Nome:" class="form-control">
  </div>

  <div class="form-group">
    <input type="file" name="imagem_album" class="form-control">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-success">Cadastrar</button>
  </div>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $nome_album     = $_POST['nome_album'];
  $caminho_album  = "albums/{$nome_album}";

  if (!is_dir($caminho_album)) {
    mkdir($caminho_album);
  }

  $capa_album = $_FILES['imagem_album'];

  $info_capa_album    = explode('.', $capa_album['name']);
  $extensao_imagem    = $info_capa_album[1];
  $nome_capa = $nome_album . '.' . $extensao_imagem;

  // Move o arquivo (imgaem da capa do album) do local temporario para o novo diretorio criado (pasta album).
  if (move_uploaded_file($capa_album['tmp_name'], $caminho_album . '/' . $nome_capa)) {
    header('Location: ?page=albums');
  } else {
    echo 'Falha no upload...';
  }
}

?>