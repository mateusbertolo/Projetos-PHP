<?php
$query_jogos_lista = "SELECT * FROM jogo ORDER BY data_lancamento";
$resultado_jogos = mysqli_query($conn, $query_jogos_lista);


?>


        <?php while($linha_jogo = mysqli_fetch_array(
            $resultado_jogos)) { 
                
                $query_jogos_plataforma = "SELECT plataforma.nome FROM plataforma INNER JOIN jogo_plataforma ON jogo_plataforma.id_plataforma = plataforma.id WHERE jogo_plataforma.id_jogo = {$linha_jogo['id']}";
                $resultado_plataformas = mysqli_query($conn, $query_jogos_plataforma);


                $query_jogos_idioma = "SELECT DISTINCT idioma.nome FROM idioma INNER JOIN jogo_idioma ON jogo_idioma.id_idioma = idioma.id WHERE jogo_idioma.id_jogo = {$linha_jogo['id']}";
                $resultado_idioma = mysqli_query($conn, $query_jogos_idioma);


                if($linha_jogo['valor'] != 0 ){
                   $linha_jogo['valor'] = "R$ " .  number_format($linha_jogo['valor'],2,",");
                }
                else{
                    $linha_jogo['valor'] = "Free";
                }


            ?>
            <div id="game-list">
                   <a href="game.php?id=<?=$linha_jogo['id']?>">
                    <div class="game">
                      
                        <div class="photo">
                            <img 
                                src="<?=$linha_jogo['imagem_url']?>" 
                                alt="<?=$linha_jogo['nome']?>"
                            >
                        </div>
                        <div class="info"<?=$linha_jogo['descricao']?>>
                            <div class="title"><?=ucfirst(mb_strtolower($linha_jogo['nome']))?></div>
                                    <div class="platforms">
                                            <?php while($linha_plataforma = mysqli_fetch_array(
                                                $resultado_plataformas)) { ?>
                                                
                                                <div class="platform sub-block"><?=$linha_plataforma['nome']?></div>

                                            <?php } ?>
                                        </div>
                                    <div class="idioms">
                                        <?php while($linha_idioma = mysqli_fetch_array(
                                                $resultado_idioma)) { ?>
                                        <div class="idiom sub-block"><?=$linha_idioma['nome']?></div>
                                        <?php } ?>
                                    </div>
                            <div class="release-date"><?=$linha_jogo['data_lancamento']?></div>
                        </div>
                            <div class="price"><?=$linha_jogo['valor']?></div>
                    </div>
                   </a>    
                <?php } ?>
                 
            </div>