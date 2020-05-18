<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Aposte Já</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/minhas_apostas.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="assets/js/semantic.min.js"></script>
</head>

<body>
  <div id="header"></div>
  <div class="ui container" style="margin-top: 60px;margin-bottom: 60px;">
        <div class="ui large header">Minhas Apostas</div>

            <div class="ui cards">
                <div class="card card_aposta">
                    <div class="content">
                        <a style="display: block; color: black">
                            <div class="ui stackable three column grid">
                                <div class="column">
                                    <div class="bandeiras">
                                        <div class="time">
                                            <img class="ui tiny image" id="imagem_card_casa" src="./assets/images/bandeira_brasil.PNG">
                                            <div class="nome_time">
                                                Brasil
                                            </div>
                                        </div>
                                        <div class="versus">
                                            <span>1</span>x<span>2</span>
                                        </div> 
                                        <div class="time">
                                            <img class="ui tiny image" id="imagem_card_casa" src="./assets/images/bandeira_suica.jpg">
                                            <div class="nome_time">
                                                Suíça
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class ="infos_jogo">
                                        <div class="ui small header" style="margin-bottom: 10px">Detalhes do Jogo:</div>
                                        <div class="data_jogo">
                                            <i class="calendar outline icon"></i>
                                            17/06/2018
                                        </div>
                                        <div class="local_jogo">
                                            <i class="map pin icon"></i>
                                            Rostov, Rússia
                                        </div>
                                        <div class="horario_jogo">
                                            <i class="clock outline icon"></i>
                                            15h
                                        </div>
                                        <div class="valor_jogo">
                                            <i class="money bill alternate outline icon"></i>
                                            R$ 15.00
                                        </div>  
                                    </div>
                                </div>
                                <div class="column">
                                    <div class ="infos_aposta">
                                        <div class="ui small header" style="margin-bottom: 10px">Detalhes da Aposta:</div>
                                        <div class="status_aposta">
                                            <b>Status:</b> <span class="yellow">Aguardando Jogo</span>
                                        </div>
                                        <div class="quantidade_aposta">
                                            <b>Quantidade:</b> 5 apostas
                                        </div>
                                        <div class="valor_aposta">
                                            <b>Valor Total:</b> <span class="green">R$ 75,00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card card_aposta">
                    <div class="content">
                        <a style="display: block; color: black">
                            <div class="ui stackable three column grid">
                                <div class="column">
                                    <div class="bandeiras">
                                        <div class="time">
                                            <img class="ui tiny image" id="imagem_card_casa" src="./assets/images/bandeira_brasil.PNG">
                                            <div class="nome_time">
                                                Brasil
                                            </div>
                                        </div>
                                        <div class="versus">
                                            <span>2</span>x<span>2</span>
                                        </div> 
                                        <div class="time">
                                            <img class="ui tiny image" id="imagem_card_casa" src="./assets/images/bandeira_costa_rica.png">
                                            <div class="nome_time">
                                                    Costa Rica
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class ="infos_jogo">
                                        <div class="ui small header" style="margin-bottom: 10px">Detalhes do Jogo:</div>
                                        <div class="data_jogo">
                                            <i class="calendar outline icon"></i>
                                            22/06/2018
                                        </div>
                                        <div class="local_jogo">
                                            <i class="map pin icon"></i>
                                            São Petersburgo, Rússia
                                        </div>
                                        <div class="horario_jogo">
                                            <i class="clock outline icon"></i>
                                            09h
                                        </div>
                                        <div class="valor_jogo">
                                            <i class="money bill alternate outline icon"></i>
                                            R$ 10.00
                                        </div>  
                                    </div>
                                </div>
                                <div class="column">
                                    <div class ="infos_aposta">
                                        <div class="ui small header" style="margin-bottom: 10px">Detalhes da Aposta:</div>
                                        <div class="status_aposta">
                                            <b>Status:</b> <span class="yellow">Aguardando Jogo</span>
                                        </div>
                                        <div class="quantidade_aposta">
                                            <b>Quantidade:</b> 2 apostas
                                        </div>
                                        <div class="valor_aposta">
                                            <b>Valor Total:</b> <span class="green">R$ 20,00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card card_aposta">
                    <div class="content">
                        <a style="display: block; color: black">
                            <div class="ui stackable three column grid">
                                <div class="column">
                                    <div class="bandeiras">
                                        <div class="time">
                                            <img class="ui tiny image" id="imagem_card_casa" src="./assets/images/bandeira_brasil.PNG">
                                            <div class="nome_time">
                                                Brasil
                                            </div>
                                        </div>
                                        <div class="versus">
                                            <span>3</span>x<span>0</span>
                                        </div> 
                                        <div class="time">
                                            <img class="ui tiny image" id="imagem_card_casa" src="./assets/images/bandeira_servia.png">
                                            <div class="nome_time">
                                                Sérvia
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class ="infos_jogo">
                                        <div class="ui small header" style="margin-bottom: 10px">Detalhes do Jogo:</div>
                                        <div class="data_jogo">
                                            <i class="calendar outline icon"></i>
                                            27/06/2018
                                        </div>
                                        <div class="local_jogo">
                                            <i class="map pin icon"></i>
                                            Moscou, Rússia
                                        </div>
                                        <div class="horario_jogo">
                                            <i class="clock outline icon"></i>
                                            15h
                                        </div>
                                        <div class="valor_jogo">
                                            <i class="money bill alternate outline icon"></i>
                                            R$ 12.00
                                        </div>  
                                    </div>
                                </div>
                                <div class="column">
                                    <div class ="infos_aposta">
                                        <div class="ui small header" style="margin-bottom: 10px">Detalhes da Aposta:</div>
                                        <div class="status_aposta">
                                            <b>Status:</b> <span class="yellow">Aguardando Jogo</span>
                                        </div>
                                        <div class="quantidade_aposta">
                                            <b>Quantidade:</b> 20 apostas
                                        </div>
                                        <div class="valor_aposta">
                                            <b>Valor Total:</b> <span class="green">R$ 240,00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
  </div>

  <script src="assets/js/script.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          Script.start('on');
      });
  </script>
</body>
</html>