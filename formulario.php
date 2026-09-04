<?php require "header.php"?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Formulário</h1>
                    </div>
                    <br>
                    <p class="display-4">
                      <strong>"Formulário de Cadastro de Países"</strong>.
                    </p>
                    <br>
                    <form action="form-paises.php" method="post">
                        <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">Nome</span>
              <input type="text" class="form-control" name="nome" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon2">População</span>
              <input type="text" class="form-control" name="populacao" aria-describedby="basic-addon2">
              
            </div>

            <div class="mb-3">
              <label for="basic-url" class="form-label">URL de uma foto/imagem da bandeira</label>
              <div class="input-group">
                <input type="text" class="form-control" id="basic-url" name="imagem" aria-describedby="basic-addon3 basic-addon4">
              </div>
              <div class="form-text" id="basic-addon4">Endereço http de uma imagem da internet</div>
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">Continente</span>
              <input type="text" class="form-control" name="continente" aria-label="Amount (to the nearest dollar)">
            </div>

            <div class="d-flex gap-2 mt-4">
              <button type="submit" class="btn btn-primary">Gravar</button>
              <a href="formulario.php" class="btn btn-secondary">Cancelar</a>
            </div>
                    </form>

                            </main>
                        </div>
                    </div>

<?php require "footer.php"?>