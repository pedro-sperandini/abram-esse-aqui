<?php require "header.php"?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Listagem</h1>
                    </div>
                    <br>
                    <p class="display-4">
                        Esta é a página <strong>"LISTAGEM"</strong>.
                    </p>
<?php
    					require "conection.php";
    					$sql = "SELECT id, nome, bandeira, continente, populacao FROM paises";
    					$stmt = $conn->query($sql);
    					?>
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Populacao</th>
                          <th scope="col">Continente</th>
                          <th scope="col">Bandeira</th>
                           
                        </tr>
                      </thead>
                      <tbody>
                        <?php while ($row = $stmt->fetch()): ?>
                        <tr>
                          <th scope="row"><?php echo $row['id']; ?></th>
                          <td><?php echo $row['nome']; ?></td>
                          <td><?php echo $row['populacao']; ?></td>
                           <td><?php echo $row['continente']; ?></td>
                          <td> 
                          <a href="<?php echo htmlspecialchars($row['bandeira']); ?>" target="_blank">
                          <img
                            src="<?php echo htmlspecialchars($row['bandeira']); ?>"
                            alt="Bandeira de <?php echo htmlspecialchars($row['nome']); ?>"
                            width="60"
                            height="40"
                            class="rounded border"
                            style="object-fit: cover;"
                               
                          >                          
                          </td>
                          
                            
                        </tr>
                        <?php endwhile; ?>
                      </tbody>
                    </table>
                              
<?php require "footer.php"?>