<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Isinha</title>

  <!-- CSS -->
  <link rel="stylesheet" href="estilo_isinha.css" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- /CSS -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: white">
  <?php

  $titulos = array(
    "1" => "13/05/2022 Início",
    "2" => "25/05/2022 Primeiro Encontro",
    "3" => "26/05/2022 Primeiro Bjinho",
    "4" => "27/05/2022 Primeiro Beijo",
    "5" => "02/06/2022 Primeiro Te Amo",
    "6" => "05/06/2022 Comecei A Gostar De Você",
    "7" => "21/06/2022 Presente De Aniversário",
    "8" => "29/07/2022 Aniversário Da Giovanna",
    "9" => "??/08/2022 Amigos",
    "10" => "14/10/2022 Primeira Vez Saindo Juntos De Verdade",
    "11" => "30/12/2022 Conhecendo Sua Mãe"
  );


  $imagens = array(
    "1" => "imagens/perfil.jpg",
    "2" => "imagens/1encontro.jpg",
    "3" => "imagens/1bjinho.jpg",
    "4" => "imagens/1beijo.jpg",
    "5" => "imagens/PrintTeamo.jpg",
    "6" => "imagens/flork.png",
    "7" => "imagens/presenteniver.jpg",
    "8" => "imagens/imagem1.jpg",
    "9" => "imagens/amigos.png",
    "10" => "imagens/saindo.png",
    "11" => "imagens/imagem5.jpg",

  );

  $textos = array(
    "1" => "Bom... Se Você Ta Lendo Isso Aqui, É Porque Deu Tudo Certo. É Porque Eu Consegui, Você Conseguiu, Nós Conseguimos.
    Eu Poderia Começar Dizendo Que Eu Te Amo, Mas Você Já Sabe Disso.
    Então Vou Começar Contando Como Tudo Começou...
    <br>
    Estava Eu, Em Um Dia Bem Intediante Ajudando Meu Pai Na Reforma Da Minha Atual Casa, Enquanto Eu Descansava.
    Decidi Abrir O Instagram Da Escola, Por Curiosidade E Ver As Pessoas Que Estudavam Lá Atraves Das Pessoas
    Que O Instagram Da Escola Seguia. Até Que Eu Achei O Seu Perfil, E Até Tirei Print Porque Minha Internet
    Estava Ruim E Fiquei Com Medo De Acabar Perdendo Ele Ksjskkkkk Sla
    <br>
    Eu Tenho Esse Print Até Hoje, E Indo Nos Dados De Quando Foi Tirado Lá Mostra Que Foi No Dia 13/05/2022
    O Que Significa? 4 Dias Antes Da Gente Conversar Pela Primeira Vez. Mas Antes Disso, Eu Ja Tinha Certeza
    Do Quanto Eu Queria Conversar Com Você E Te Conhecer, Só Precisava De Coragem Mesmo Kjsksjkskkkk
    Eu Lembro Que Quando Eu Vi A Primeira Foto Do Perfil, Uauu Que Garota Linda, Eu Me Encantei De Verdade E Você
    Disso, Afinal Eu Sempre Pedia Pra Você Desarquivar Aquela Foto, Eu Achava Ela Simplesmente Perfeita
    E Ainda Acho, Apesar De Você Não Gostar Dela, Ela Sempre Vai Ser Uma Das Minhas Fotos Preferidas.
    <br>
    Mais Enfim... Eu Lembro Que Eu Cheguei Na Escola E Na Primeira Oportunidade Que Eu Tive Já Falei De Você
    Para O Grupinho De Colegas Que Eu Tinha, Um Deles Era O Kaua, E Advinha... Pra Minha Sorte Ele Conhecia
    Você, Ele Se Ofereceu Pra Fazer A Ponte E Eu Disse Que Ia Pensar, Tava Com Muito Medo De Mais Um Decepcão
    E Com Vergonha. Passou Um Tempo E Então Eu Chamei Ele No Whatsapp E Falei Que Ele Poderia Fazer A Ponte.
    E Pra Minha Surpresa Ele Me Respondeu, Falou Que Você Pediu Pra Eu Te Chamar. Eu Te Chamei E O Resto Você
    Já Sabe Né Ksjskjskskk Ou Não Porque Esquece Das Coisas Rápido. Mas Tudo Bem Isso Não É Tao Relevante Pra Hoje.",

    "2" => "Passado Quase 2 Semanas Que A Gente Tava Conversando, A Gente Finalmente Se Viu Pessoalmente Pela Primeira Vez.
    Eu Lembro Que Eu Não Aguentava Mais Conversar Com Você Pelo Celular E Não Poder Te Ver, Eu Contava Os Dias
    Pra Poder Te Conhecer Pessaolmente E Te Dar Um Abraço. Até Que Você Me Mandou Mensagem Dia 25/05/2022 Falando
    Que Ia Pra Escola, Eu Já Fiquei Em Choque, Mas Mantive A Calma E Perguntei Se Você Queria Me Encontrar E Pra
    Minha Surpresa Você Falou Que Sim.
    <br>
    Eu Lembro Que Eu Estava Na Aula De Eletivas E As Pessoas Do Meu Grupinho Faltaram, Então Eu Fiquei Com A Bruna
    (A Que Você Conheceu No Dia Que Me Esperou No Curso Pra Gente Sair), Eu Falei Pra Ela A Situação E Ela Me Ajudou,
    Falou Que Eu Deveria Te Encontrar E Me Ajudou A Inventar Uma Mentira Pros Meus Pais. Afinal Eu Sempre Ia Pra
    Casa Depois Da Escola Pra Almoçar, E Naquele Dia Eu Não Ia Poder Porque Precisava Te Ver, Então Ela Me Ajudou A
    Arrumar Uma Desculpa,E Deu Certo. Foi Chegando A Hora De Ir Embora E Meu Coração Ja Começou A Acelerar, Comecei
    A Pensar Em Um Milhão De Coias Que Poderiam Dar Errado, Você Não Gostar De Mim, Meus Pais Descobrirem, Você Me
    Achar Feio Ksjskkkkkk, Me Achar Muito Pequeno, Aaaa Sla, Eu Só Lembro Do Meu Coração Desparado E Um Milhão De
    Coisas Passando Pela Minha Cabeça. Mas Mesmo Assim Tentei Ficar Calmo E Fui Subindo Pra Pracinha, Onde Você
    Pediu Pra Eu Te Encontrar. Fiquei Sentado Nas Mesinhas Te Esperando E Pensado Em Tudo O Que Poderia Dar Errado,
    Até Que Eu Olho Pro Lado E Te Vejo Chegando, Pra Minha Surpresa Não Tava Sozinha Tava Acompanhada Do Renan E Da
    Giovanna, Hoje Em Dia Eu Diria Que Isso É Chato, Mas Naquele Dia Foi Otimo, Era Tudo O Que Eu Precisava Porque
    Eu Sou Muito Timido E Vergonhoso Por Incrivel Que Pareça, Então Com Eles Dois Lá Seria Muito Melhor, Eles Me
    Ajudariam A Puxar Assunto E Não Ficaria Um Clima Estranho De Silencio Entre A Gente. Eu Sei Que Eu Te Olhei Com
    Aquela Calça Xadrez E Falei "."Caralhoo, Ela É Ainda Mais Bonita E Estilosa Pessoalmente".", Você Tava Vindo Na
    Minha Direção E Entao Eu Levantei Pra Que Eu Pudesse Te Dar Um Abraço, A Gente Se Abraçou E Meudeus.... Aquilo Foi
    E Especial. Por Mais Que Na Minha Cabeça Ainda Seria Só Uma Ficada, Tudo Com Você Era Diferente, As Conversas, O
    Modo Como A Simplesmente Incrivel E Magico, Eu Sei Que Você Não Lembra De Nada Dessas Coisas, Mas Eu Lembro E Pra
    Mim Foi Muito Magico Gente Se Tratava, O Seu Abraço O Seu Toque, Tudo Era Diferente Com Você. Deve Ser Por Isso Que
    Foi Tão Especial Pra Mim E Eu Lembro De Tudo. Eu Tenho O Print Da Conversa Depois Do Nosso Primeiro Encontro.
    <br>
    Cheguei No Curso E Fui Direto Contar Para O Claudio Que Finalmente Tinha Te Encontrado, Na Verdae Eu Nem Precisei Falar.
    Assim Que Eu Cheguei Ele Notou O Sorriso Enorme Que Tava No Meu Rosto E Ja Sacou Na Hora, Só Perguntou Pra Confirmar
    Se Era O Que Ele Imaginava.
    <br>
    Você Me Mandou Mensagem Perguntando O Que Eu Gostava De Ganhar E Falando Que O Meu Cabelo Era Muito Bom. E Eu Bem
    Espertinho Respondi Que Gosto De Ganhar Um Beijo Seu Kjskskskkk, Depois Falei Que O Seu Cabelo Era Muito Mais Bonito
    E Perfeito Que O Meu E Que Eu Achei O Seu Estilo Muito Foda, O Que De Fato É Verdade. Mas Você Respondeu Que Um Beijo
    Seu Não Valia Nesse Quesito Do Que Eu Gostava De Ganhar 😭. ",
    
    "3" => "No Dia Seguinte Pra Minha Surpresa A Gente Iria Se Encontrar De Novo, Bom... Se Sabe Que Eu Sou Paranoico Né, Entao Já
    Comecei A Imaginar Que Se Não Gostou De Mim E Etc... Mais Enfim, Você Pediu Pra Gente Se Encontrar Na Pracinah De Novo
    Dai Eu Fui La E Fiquei Esperando Você Chegar, Você Chegou E Com Seus Amigos De Novo 🙄 KJskskkkk E Me Perguntou Se Eu
    Queria Ir Até O Dia Com Você, Porque Você Queria Comprar Um Monster, Eu Fui Com Você E A Giovanna E O Guelfi, Fui Lá
    E Você Me Deixou De Lado 😭 Lembro Que A Gente Estava No Ultimo Corredor De Lá, E Você Com O Guelfi E A Giovanna Na
    Minha Frente, Dai Um Veio Parou Bem No Meio Do Caminho E Não Consegui Passar, Porque Vocês Estavam Indo Pro Caixa
    A Giovanna Percebeu Que Eu Fiquei Pra Trás E Me Esperou, E Me Catou Pelo Braço, Me Levou Até O Caixa Com Você E O
    Guelfi, Bom... Eu Não Diria Ciumes, Até Porque Naquele Tempo Acho Que Você Ainda Cagava Pra Mim, Mas Você Me Tirou
    Dos Braços Da Giovanna E Ficou De Braço Coisado Comigo KSJkjskjsksjks Tudo Que Eu Queria.
    <br>
    A Gente Voltou Pra Pracinha E Fiquei Esperando Você E Eles Tomarem O Blers, Deu A Hora De Você Entrar Então Nós Três
    Começamos A Descer A Pracinha, Chegando Na Esquina Da Escola Eu Ja Pensei Comigo Mesmo, ". "Nossa, Mais Um Dia Com Ela
    E Eu Não Tive Coragem De Dar Um Beijinho Nela, Mas Pode Ser Que Agora Seja A Hora" .", Então Eu Bem Discretamente Hidratei
    Meus Labios Na Esperança De Sair Pelo Menos Um Selinho, Sei Lá Eu Senti Que Iria Acontecer.
    Fomos Chegando Mais Perto Do Portão E Minha Esperança Indo Embora, Até Que Eu Me Despedi Da Giovanna E Depois De Você,
    E Pra Minha Surpresa Depois Do Nosso Abraço De Despedida Você Me Deu Dois Selinhos E Entrou Pra Dentro. Meudeus....
    Aquilo Foi Tão Bom, Tão Magico, Eu Sai Dali Saltidando, Me Senti Tão Feliz, Lembro Que Fui A Caminho Do Curso Todo Sorrindo
    Mesmo Que Eu Tenha Esbarrado Com Meu Pai Na Esquina Da Escola, E Ele Me Levou Até O Curso Eu Lembro De Esta Extremamente Feliz
    E Mais Um Dia Cheguei No Curso Com Um Sorriso De Ponta A Ponta, E O Claudiao Ja Veio Me Perguntar O Que Tinha Acontecido.
    Eu Tenho O Print Tambem De Quando Cheguei No Curso E A Gente Foi Conversar.",

    "4" => "No Dia Seguinte Era Uma Sexta, E Aparentemente As Coisas Estavão Indo Super Bem. A Gente Iria Se Encontrar De Novo E Tudo Estava Bem
    Fui Pra Pracinha Dessa Vez, Mas Você Já Estava Lá Sentada Nas Mesihnas E Envolta Tinha Umas 4 Pessoas, Eu Cheguei Mais Perto E
    Vi Que O Guelfi Tava Te Abraçando😡 Confesso Que Fiquei Com Um Pouco De Ciumes🥰 Mas Tudo Certo, Eu Cheguei Pra Falar Com Você
    E Você Estava Chorando, Perguntei O Que Tinha Acontecido E Estava Tentando Conversar Com Você, Mas Você Não Conseguia Me Responder,
    O Guelfi Pediu Pra Eu Te Abraçar, E Eu Fiquei Uns 5 Minutos Abraçado Com Você Mas Tive Que Ir Embora, Porque Nesse Dia Eu Não Tinha
    Uma Desculpa Pra Não Ir Pra Casa Almoçar, Então Voltei Correndo Pra Casa E Lembro De Ter Te Mandado Mensagem, Pedindo Desculpas Por
    Não Conseguir Ficar E Falei Que Se Precisasse De Mim Eu Estaria Ali, Dai Você Me Pediu Desculpas Por Não Ter Me Dado Atenção E Que
    Não Conseguia Falar Naquele Momento Senão Iria Chorar De Novo.
    Eu Respondi Que Estava Tudo Bem E Que Não Precisava Se Desculpar Por Nada, Porque Eu Entendia Você.
    Foi Passando O Tempo, E O Claudio Me Deu A Ideia De Ir Na Sua Saida Pra Poder Te Ver, Eu Gostei Da Ideia, Mas Não Sabia O Que Fazer,
    Se Eu Falava A Verdade Para Meus Pais Ou Se Inventava Alguma Mentira Só Pra Poder Ir Te Ver. Mas Eu Tambem Nem Sabia Se Eu Podia
    E Se Você Iria Querer, Então Perguntei Pra Você Se Eu Podia E Se Iria Gostar Que Eu Fosse, E Pra Minha Surpresa Tu Apoiou A Ideia
    E Disse Que Ficaria Feliz Se Eu Fosse. Já Comecei A Bolar O Plano Pra Poder Ir Te Ver, Falei Pro Meu Pai Que Eu Iria No
    Shopping Com O Pessoal Do Curso, Mas Que Antes Eu Precisava Passar Em Casa Pra Pegar Dinheiro, Ele Acreditou E Me Levou Até
    Em Casa E Depois Até O Shopping, Eu Lembro Que Estava Quase Na Hora De Você Sair, Então Entrei Correndo No Shopping, Desci
    Até A Praçã De Alimentação E Fui Na Cacau Show, Comprei Uma Caixinha Com 10 Bombons Pra Ti, Mas Nem Sabia Se Você Iria Gostar,
    Sai Do Shopping E Fui Correndo Em Direção A Escola. Fiquei Um Tempinho Perto De Um Açougue Esperando Dar A Hora, Ai Fui
    De Verdade Até A Escola Te Encontrar, Cheguei Lá E Você Já Estava Do Outro Lado Da Rua Me Esperando, Onde A Gente Tinha
    Combinado De Se Encontrar. Cara... Eu Só Consigo Lembrar Do Sorriso Que Você Deu Ao Me Ver, Você Venho Na Minha Direção E
    Me Abraçou, E Ali Eu Perdi Tudo, Literalemnte Tudo, Foi Incrivel Pra Mim Ter Visto O Seu Sorriso E Ver Você Vindo Em Direção
    A Mim Só Pra Me Abraçar, Eu Te Escondi O Chocolate E Depois Do Abraço Mostrei Você Ficou Surpresa, Acho Que Não Pensou Que Eu
    Realmente Fosse Te Levar Algo. Só Sei Que A Gente Se Olhou E Nosso Primeiro Beijo Beijo Aconteceu Ali Mesmo, Foi Perfeito,
    Simplesmente Indescritivel, Tanto O Beijo Quanto A Sensação, Fiquei Sem Palavras. Ali Eu Tenho Certeza Que O Tempo Ao
    Meu Redor Parou, E As Estrelas Pararam Só Pra Observar Aquele Momento Incrivel. Eu Sei Que Eu To Falando Aqui Todas
    Essa Bobagens E Que Você Nem Se Lembra E Esse Beijo Não Significou Tudo Isso Pra Ti. Mas Tudo Bem, Porque Eu To
    Contando Do Que Eu Senti E De Como Foi Pra Mim, Que No Caso Foi MAGICO.",

    "5" => "A Gente Foi Conversando E Se Conhecendo Um Pouco Mais, Até Que O Primeiro Te Amo Surgiu, Não Foi Um Te Amo Ou Um
    Eu Te Amo, Mas Por Incrível Que Pareça Veio De Você 🤪 KSJSKkkkkk. Brincadeira, Ele Veio Porque Eu Perguntei Se
    Você Iria Pra Escola Naquele Dia, E Você Respondeu Que Não Porque Teria Que Cuidar Do Seu Irmão. Dai Te Xinguei
    De Rata E Falsa KJSkskskskk, Enfim... Eu Tenho O Print Tambem.
    <br>
    Eu Lembro Que Na Hora Em Que Eu Vi A Notificação Dessa Mensagem, Eu Entrei Em Choque, Sla Não Me Pergunte O Por Que, Eu
    Só Lembro Do Mundo Ter Parado Ao Meu Redor Por Uns 5 Segundos, E Eu Não Sabia Se Te Respondia Com T Amo Tambem,
    Pra Nãoparecer Emocionado Ou Por Eu Não Ter Certeza Se Gostava De Ti E Acabar Te Magoando Depois Ou Então Porque
    Pra Mim A Palavra T Amo, Te Amo, Eu Te Amo É Muito Forte Sabe? E Pra Mim Muita Gente Usava Por Usar E Pra Brincar
    Com As Pessoas. Então Não Queria Usar Com Você Até Ter Certeza, Porque Mesmo Que Eu Não Tinha Certeza Se Eu
    Gostava De Ti. A Possibilidade De Sla, Algum Dia Eu Te Magoar Acabava Comigo. Hoje Em Dia Não Mais Porque Eu Tenho
    Certeza Que Eu Te Amo, Tenho Certeza De Que Você É O Amor Da Minha Vida E Que Eu Quero Passar Cada Segundo Da Minha
    Vida Ao Seu Lado.",

    "6" => "Os Dias Foram Passando E A Gente Continuava Conversando, E A Cada Dia Que Passava Eu Gostava Mais De Você, Queria Te
    Conhecer Mais E Mais, Você Foi Se Abrindo Pra Mim E Eu Fui Vendo A Pessoa Linda Que Você Realmente É, Fui Vendo
    A Princesa Que Hoje Em Dia Posso Chamar De Minha, Eu Via O Quanto Você Precisava De Alguem Que Ficasse E Lutasse
    Por Você, Via O Quanto Você Precisava Ser Amada De Verdade, Do Jeitinho Que Você Merece. Eu Sabia Que Seria Dificil
    Mas Eu Estava Disposto A Tentar Mesmo Não Sabendo Se Ainda Gostava De Você Eu Falava Pra Mim Mesmo Que Eu Daria O
    Meu Melhor Por Você, Que Eu Não Iria Te Abandonar Que Eu Iria Fazer Você Se Sentir A Pessoa Mais Especial Desse Mundo.
    Foi Então Que Um Dia Eu Tive Certeza Que Gostava De Ti, Foi O Dia Pelo Qual Eu Comecei A Me Apaixonar Por Você, E Eu
    Sei Que Parece Besta Mas Pra Mim Não É. Eu Me Lembro De Ter Acordado Um Dia Que Eu Ia Ir Pra São Paulo Com A Mari E Os
    Guri, E Eu Vi Que Tinha Mensagem Sua. Dois Audios De Quase Dois Minutos, Por Um Instante Eu Entrei Em Choque, Não Sabia
    O Que Esperar Daqueles Audios, Talvez Você Falando Que Até O Momento O Que A Gente Tinha Era Legal Mas Você Não Queria
    Mais, Sla... Me Passaram Diversas Coisas Pela Cabeça. Foi Então Que Eu Coloquei Os Meus Fones E Ouvi O Audio. E Cara...
    Aquilo Foi Uma Das Coisas Mais Fofas E Bonitas Que Eu Ja Tinha Ouvido Em Toda A Minha Vida, E Foi Depois De Ouvir Aqueles
    Dois Audios Que Eu Comecei A Me Apaixonar Por Você De Verdade. Se Quiser Ouvir Os Audios Estão Aqui.",

    "7" => "Eu Lembro Que Um Dia Antes De Eu Te Entregar O Presente, Eu Sai Do Curso Junto Com O Claudiao E Fui Direito Pro Plaza, Ele Foi
    Comigo E Me Ajudou A Escolher O Seu Presente, Lembro De Ter Te Mandado Mensagem Perguntando Se Você Tinha Um Livro De Bruxaria
    (O Livro Que Eu Te Dei). E Você Respondeu Que Não 🙌, Comprei Esse Mesmo Hshshshs, Passei Na Cacau Show E Comprei Uma Barra
    Amarga Pra Ti, Porque A Isa Falou Que Você Gostava. Chueguei Em Casa E Fui Direto Pro Quartinho Embrulhar Seu Presente E
    Guardar Ele Na Mochila Para O Dia Seguinte.
    <br>
    Até Que Chegou O Dia Seguinte E Eu Estava Bem Ansioso, Eu Lembro Que Nas Duas Ultimas Aulas Antes De Sermos Liberados
    Eu Inventei De Fazer Uma Cartinha Pra Você, A Pricipio Era Pra Ser Algo Simples, Fui Escrevendo No Zap E Depois Passar
    Pro Papel, Eu Só Não Imaginava Que Passando Pro Papel Dariam 2 Folhas De Caderno Frente E Verso KJSKjskjsksksk
    Mas Tudo Bem, Terminei A Carta Faltando 10 Minutos Para Sermos Liberados E Eu Coloquei Ela Correndo Dentro Do Envelope
    Do Presente, Estava Muito Ansioso Pra Te Entregar O Presente, Não Sabia Se Você Iria Gostar Ou Não.
    A Gente Subiu Até A Pracinha E Lá Eu Te Entreguei O Presente. E Aparentemente Você Gostou E Eu Fiquei Táo Feliz Que Você
    Gostou, Você Nem Imaginava O Corre Que Foi Pra Poder Tudo Isso Dar Certo Ksjksjkskkk. Eu Precisava Ir Embora Mas Você
    Pediu Pra Eu Ficar Mais E Eu Fiquei, Mas Chegando Em Casa Recebi Uma Mensagem Do Meu Pai Bem Desagradavel. Ele Estava
    Brigando Comigo Porque Eu Me Atrasei Pro Curso, Mas Tudo Bem Pra Mim Valeu A Pena Te Ver Feliz Sabe? Enfim Eu Me Resolvi
    Com O Meu Pai E No Final Ficou Tudo Bem.
    <br>
    Eu Nem Poderia Imaginar Que Aquele Teria Sido Um Dos Melhores 100 Reais Que Eu Ja Gastei Em Toda A Minha Vida, Porque Ter Visto
    Você Feliz Daquele Jeito Não Tem Preço Pra Mim Meu Amor, Foi Perfeito Ter Visto O Seu Sorriso, Mesmo Não Querendo Presente
    E Não Querer Aceitar, Foi Lindo Ver A Felicidade No Seu Olhar, Não Sei Como Você Se Sentiu Mas Eu Me Senti Muito Bem E Muito
    Feliz.",
    
    "8" => "Tinha Tudo Pra Ser Mais Uma Sexta Normal Como Todas As Outras, Mas Não Foi E Não Foi Porque No Dia Seguinte Era Aniversário Da
    Giovanna, Você Tinha Dormido Na Casa Da Giovanna E Entao Vocês Decidiram Sair E Comprar Algumas Coisas Pro Aniversário Dela,
    Pra Minha Surpresa Você Falou Que Estava No ABC, Que Fica Do Lado Do SENAC, E Eu Que Não Sou Bobo Nem Nada Perguntei Se
    Poderia Ir Te Ver, Já Estava Tentando Sair Contigo Fazia Mais De 1 Mês Durante As Ferias Mas Você Sempre Arrumava Uma Desculpa.
    Pra Minha Surpresa Nesse Dia Você Aceitou Que Eu Fosse Lá E Ficasse Um Tempo Com Vocês, Eu Como Sempre Arrumei Uma Desculpa
    Para Meus Pais E Até Sai Mais Cedo Da Aula Pra Ir Te Ver, Estava Com Medo De Você Acabar Indo Embora E Eu Não Conseguir Te Ver,
    Acho Que Eu Nunca Te Contei Isso Mas No Caminho Eu Quase Fui Atropelado, Sai Correndo Do Curso Porque Queria Chegar Logo E Te Ver
    Já Estava Com Saudades Do Seu Abraço. Eu Me Lembro De Ter Ficado Aquelas 2 Horinhas Toda Abraçado Com Você E Foi Incrível, Tambem
    Me Lembro De Termos Tirado Nossa Primeira Fotinha Juntos, Não Foi A Melhor Foto Mas Pelo Menos Era Uma Recordação Daquele Dia
    Daquele Momento E Principalmente De Você.
    <br>
    Cheguei Em Casa Tão Feliz Que A Unica Coisa Em Que Eu Pensava Era No Seu Abraço E Em Como Ficamos Tão Juntinhos Por Mais Do Que Só 10
    Minutos Na Escola, Aquilo Sem Duvidas Foi Muito Marcante E Importante Pra Mim, Lembro De Você Me Falar Que Foi Naquele Dia Em Que
    Você Se Sentiu Segura Em Meu Abraço E Que Ele Se Tornou Muito Bom Pra Ti.
    Eu Me Lembro De Chegar No Dia Seguinte(Sábado), E Ter Sido A Festa Da Giovanna, Eu Lembro Que Passei A Tarde Conversando Contigo
    Você Tava Lele Então Não Sei Se Vai Lembrar, Mas Passou A Tarde Toda Chamando Pra Mim Ir Lá Na Casa Da Giovanna Pra Ficar Com Você
    E Até Ficaria, Mas Não Fazia Ideia De Onde A Giovanna Morava E O Principal, Ela Não Me Convidou, Confesso Que Eu Queria Muito Ter
    Ido Mas Pegaria Mal Eu Chegar Lá Sem Ser Convidado. De Qualquer Forma Aquele Dia Foi Legal Pois Vi Que Até Quando Se Tava Lele
    Talvez Pensasse Em Mim.
    <br>
    Foi Então Que Chegou No Domingo, Eu Estava Sozinho Em Casa Então Como Eu Sabia Que Você Estava "."Perto"." Brinquei De Você Ir Lá
    Mas Você Falou Que Não Iria Porque Era Muito Longe (Era Preguiça Mesmo), Então Eu Falei Que Iria Até Você E Perguntei Onde Você
    Estava, Você Me Falou Que Estava Em Uma Padaria Na Gilda, Gsuis Essa Padaria Ficava A Uns 20 Minutos Da Minha Casa. Mas Como
    A Vontade De Te Ver De Novo Estava Muito Grande Eu Não Me Importei, Me Troquei Bem Rápido E Sai Correndo De Casa, Acho Que Foi
    A Priemira Vez Em Que A Minha Perna Começou A Doer, Eu Corri Tanto Mais Tanto Vivida Que Você Não Faz Ideia. Eu Estava Com Tanto
    Medo Dos Meus Pais Chegarem E Não Me Encotrarem Em Casa, Mas Fui Mesmo Assim, Lembro Que Cheguei Lá E Até Encontrar Você E A
    Giovanna Demorou Um Pouco, Fui Até Vocês E Dei Os Parabens Para A Giovanna, Logo Depois Eu Te Abraçei E Perguntei Se Estava
    Tudo Bem. Lembro De Você Falar Que Sim E Me Mandar Embora Porque Vocês Já Estavam Voltando Pra Casa Da Giovanna.
    A Giovanna Ficou Com Dó De Mim Por Ter Andado Tudo Aquilo Só Pra Te Dar Um Abraço E Falou Que Poderia Esperar Um Pouco, Mas
    Eu Não Poderia Demorar Então Sugeri Levar Vocês Até A Casa Dela, No Caminho Pra Casa Dela Você Não Largava O Celular E Acabou
    Pisando Em Falso Num Degrau Grandão E "."Torcer"." O Pé, Andamos Mais Um Pouco E Você Falou Que Estava Com Muita Dor, Entao Sentamos
    Na Frente De Um Predinho E Falei Pra Você Colocar Sua Perna Sobre A Minha E Você Ficou Fazendo Massagem No Seu Pé.
    Me Ofereci Pra Te Levar No Colo Mas Você Não Quis, Então Te Levei Só Apoiada Sobre Meu Ombro Mesmo Até A Casa Dela. Chegando Lá
    Ela Me Chamou Pra Entrar, E Acredite Eu Queria Muito Mas Estava Morrendo De Medo Dos Meus Pais, Então Recusei Mas Não Queria Ir
    Embora, Eu Só Queria Mais Daquelas 2 Horas De Sexta-Feira Mas Sabia Que Era Quase Impossivel. Então Esperei Vocês Duas Entrarem
    E Voltei Correndo Pra Casa De Novo, Cheguei Em Casa E Graãs A Deus Meus Pais Nao Haviam Chegado, Fui Tomar Um Banho Pra Disfarçar
    E Logo Em Seguida Eles Chegaram, Mas Me Lembro Da Minha Dor Na Perna KJSkjsksksksk, Mas Te Digo Que Valeu A Pena Ter Ficado Com
    Aquela Dor Por 2 Dias Só Por Ter Te Visto Nem Que Tenha Sido Por 10 Minutos. Enfim Essa É A Historia Que Talvez Você Nao Se Lembre",

    "9" => "Bom... O Que Eu Vou Falar Agora Não É Tão Legal Como As Outras Historias Mas É Necessario. Lembro Que Quando As Aulas Voltaram E A
    Gente Podia Voltar A Se Ver, Algo Estava Diferente, Você Estava Diferente Comigo E Eu Não Sabia O Motivo. Achei Que Seria Somente
    Um Dia, Lembro Que Eu Cheguei Pra Conversar Com Você E Você Mal Olhava Na Minha Cara, Saia Andando Na Minha Frente, Não Me Abraçou
    Era Como Se Nao Quisesse Mais Eu Por Perto Mas Não Conseguia Falar Sabe? Mas Tudo Bem, Eu Achei Que Seria Só Um Dia Ruim E As Coisas
    Voltariam Ao Normal. Mais Então Aquilo Se Repetiu Por Mais 2 Ou 3 Dias E Eu Não Me Aguentava, Chegava No Curso Triste Pois Nao Sabia
    O Que Eu Tinha Feito De Errado, Conversei Com O Claudio E Falei Tudo Isso Que Estava Acontecendo E Ele Me Aconselhou A Ficar Quieto
    E Esperar Passar, Mas Eu Como Teimoso Que Sou Não Ouvi. Te Chamei Pra Conversar E Falei Tudo O Que Aconteceu E Como Eu Me Senti, E
    Então Foi Tudo Por Ladeira A Baixo, Depois Desse Dia As Coisas Que Já Não Estavam Muito Boas Ficaram Ainda Mais Ruim. Teve Um Dia
    Em Que Eu Estava Na Escola E Você Me Falou Que Queria Conversar Serio Comigo, Fiqui Em Choque E Me Lembro De Até Ter Chorado Nesse
    Dia, Eu Sabia Que Algo Ruim Estava Prestes A Acontecer E Talvez O Nosso Fim Tinha Chegado, Mas Mantive Calma E Esperei Até O Momento
    Da Nossa Conversa.
    <br>
    Você Me Pediu Para Que Fossemos Só Amigos, Porque Você Estava Passando Por Um Momento Em Que Não Entendia Muito Bem O Que Sentia
    E Tambem Não Sabia Lidar Com Isso, Então Pra Não Me Deixar Mal Queria Continuar Sendo Só Amigos. Obvio Que Eu Fiquei Muito Triste
    Com Isso, Pois Era Como Se Tudo O Que Eu Havia Planejado E Sonhado Sobre Nós Dois Foi Por Água Abaixo. Lembro De Acordar No Meio Da
    Madrugada E Chorar Pensando Em Tudo O Que Ja Aconteceu Entre A Gente E No Que Eu Queria Que Tivesse Acontecido, E Eu Me Culpava Demais
    Por Não Ter Ficado Quieto E Causado Tudo Isso, Se Eu Tivesse Aguentado E Ficado Quieto Nada Disso Teria Acontecido (Pelo Menos Na
    Minha Cabeça), Hoje Em Dia Eu Entendo Que Uma Hora Ou Outra Aquilo Poderia Acontecer E Antes Cedo Do Que Tarde.
    <br>
    Continuamos Uma Amizade Que Não Era Amizade KJSKsjkjsks As Vezes A Gente Ficava E Pelo Menos Da Minha Parte Eu Te Tratava Mais Do Que
    Uma Amiga E Isso Te Incomodava. Então Um Dia Você Me Chamou Na Escola E Disse Que Precisava Conversar Sobre Isso, Falou Que Eu
    Deveria Te Tratar Como Amiga E Parar De Te Tratar Como Minha Namorada, Coisa Que Você Não Era. E Apesar De Você Ter Razão Aquilo Me
    Deixou Mal E Eu Lembro Que Depois Desse Dia Resolvemos Dar Um Tempo, Ficamos Um Pouco Afastados E Sem Conversar Durante 1 Semana.
    Voltamos A Conversar Aos Poucos E Nos Reaproximar, Mas Ainda Amigos So Que De Novo Não Era Uma Amizade, Eu Te Enxergava Como Algo
    Amais E Ainda Te Tratava Como Alem De Uma Amiga, Passado Algumas Semanas A Gente Não Estava Dando Certo, Acabavamos Sempre No Mesmo
    Lugar, Foi Então Que Decidimos Dar Um Fim De Vez E Realmente Se Afastar, Dar Um Tempo Até Que Os Dois Estivessem Prontos De Fato
    KJskjskskjsksjk Imaginando Como Nós Dois Somos Não Conseguimos Ficar Nem 2 Semanas Direito Sem Se Conversar Pelo Menos 2 Vezes Na
    Semana, Aos Poucos A Gente Foi Voltando E As Coisas Estavam Diferentes, Não Vou Dar Detalhes De Como Fomos Voltando Por Que Acho
    Que Não Vale A Pena Falar Aqui, Mas Se Quiser Eu Te Conto De Novo Pessoalmente. Voltamos E Dessa Vez Estavamos "."Sério"."",

    "10" => "Esse Foi O Dia Em Que A Gente Marcou De Se Encontrar No Parque Central, A Primeira Vez Em Que Saimos De Verdade E Juntinhos, Apesar
    De Eu Não Querer Ter Ido Pois Estava Dodoi E Não Queria Passar Pra Você E Nem Pra Padrão Eu Fui Forçado A Ir 😭Ksksjskjs Mentira
    Eu Queria Muito Te Ver E Te Abraçar E Te Beijar, Finalmente Sentir Você Nos Meus Braços Totalmente Entregue A Mim. O Tempo Ia
    Passando E Eu Só Consigo Me Lembrar De Como Eu Não Queria Que Aquilo Acabasse, Não Queria Que A Hora De Ir Embora Chegasse,
    Eu Lembro Do Tempo Ter Passado Tão Rápido E De Tudo Ter Sido Tão Incrivel Que Nem Se Quer Tiramos Fotos Ou Gravamos Videos
    Mas Graças A Deus Teve Uma Pessoa Que Fez Isso Por Nós, A Padrão Se Você Quiser Ver Esses Videos Vou Colocar Um Link Aqui.
    <br>
    Não Fizemos Muita Coisa Naquele Dia, Literalmente Passamos O Dia Abraçados E Conversando Sobre Tudo E Qualquer Coisa
    Mas Eu Me Lembro De Cada Segundo Daquele Dia Ser Especial, Importante Pra Mim, Marcante E Valioso, Vontade De Guardar
    Aqueles Momentos Em Um Potinho",

    "11" => "Esse Dia, Aaa Esse Dia... Eu Estava Tão Ansioso Pra Finalmente Conhecer A Sua Mãe, Estava Nervoso E Com Medo Ao Mesmo Tempo
    Tinha Medo Da Sua Mãe Não Gostar De Mim, Tinha Medo Das Coisas Darem Totalemnte Erradas, Mas Não, As Coisas Aconteceram
    De Forma Simplesmente Perfeita. Sua Mãe Gostou De Mim E Meudeus Isso É Incrivel, Pelo Menos Pra Mim. Mesmo Que Antes Eu
    Brincava Que Seus Pais Me Amavam Sem Nem Mesmo Me Conhecerem E Saberem Da Minha Existencia, Eu Fiquei Super Feliz Em Saber
    Que A Sua Mãe Gostou De Mim, E Ter Ido Na Sua Casa Aquele Dia Foi Simplesmente Indescritivel Como Tudo Caminhou Perfetamente
    Bem, Eu Já Tinha Esse Sonho A Um Tempinho De Conhecer Os Seus Pais E De Fato, Era Mais Importante Pra Mim Do Que Era Pra Você
    Mas Eu Ainda Me Lembro Da Sensação Dentro Do Carro Em Caminho A Sua Casa, Uma Sensação De Conquista Sabe? De Que Tudo Aquilo
    Que Antes Eu Havia Planejado Finalmente Estava Acontecendo, E Eu So Conseguia Pensar Naquele Dia Se Repetindo Mais E Mais Vezes
    Indo Na Sua Casa Sexta A Noite, Passando Os Finais De Semana Cozinhando Com Você, E Até Mesmo Você Vindo Aqui Em Casa. Sempre
    Sempre Pensei Nisso E Sonhei Com Isso, Infelizmente Meu Sonho De Você Ir Na Minha Casa Ainda Não Foi Realizado, Mas Tudo Bem
    Tudo Leva Um Determinado Tempo, E Acredito Que Mais Cedo Ou Mais Tarde Isso Ira Acontecer E Quando Acontecer, Espero Que Seja
    Incrivel Pra Você Assim Como Foi Incrivel Pra Mim Conhecer A Sua Mãe E Ir Na Casa Dela Pela 1° Vez.
    <br>
    Aquele Dia A Gente Não Conseguiu "."Aproveitar"." Muito Por Conta Do Seu Irmão, Que Por Sinal Tambem Gosta Muito De Mim, E Vivida
    Eu Quero Que Você Experimente A Sensação De Quando A Familia Da Pessoa Que Você Ama Gosta De Você, Te Acha Uma Pessoa Legal E
    Bacana.
    <br>
    Mesmo Não Trocando Mais De 5 Palavras Com A Sua Mãe, De Alguma Forma Ela Foi Com A Minha Cara E Gostou De Mim KJSkjskjsksjk
    E Isso Foi Simplesmente Otimo Não Teria Como Ser Melhor, Com Isso Só Faltava Uma Coisa. Conhecer O Seu Papis, Mas Isso Felizmente
    Ja Aconteceu, E Tambem Foi Melhor Do Que A Gente Esperava E Aparentemente Ele Tambem Gosta De Mim Assim Como Sua Mãe.
    Eu Tinha Ido Na Sua Casa Um Dia Antes Do Ano Virar E, Meudeus Você Não Faz Ideia De Como Isso Significava Pra Mim
    Você Não Deve Lembrar Mas Quando Estavamos Nos Conhecendo Eu Disse Que Meu Dia Só Seria Bom Se Eu Passasse A Virada Do Ano Contigo
    Na Prai E De Roupinha Combinando Kjsksjsksk, Isso Não Aconteceu, Mas Só De Pensar Que Eu Cheguei No Final Do Ano Com Você Ao Meu Lado
    Cara... Não Tem Coisa Mais Gratificante Do Que Isso. Não Queria Que A Minha Hora De Ir Embora Tivesse Chegado, Afinal Eu Estava
    Vivendo Em Um Sonho KjSkjskkkk E Era Incrivel Pra Mim, Mas Infelizmente Eu Tive Que Ir Embora, E Me Doeu O Coração Ter Que Te Deixar
    E Tambem Me Doeu Ver Seu Irmão Chorando Porque Eu Fui Embora Ksjksk Coitado.
    <br>
    Cheguei Em Casa E Só Conseguia Imaginar Como Tudo Tinha Sido Incrivel E Como Mais Um Dia Ao Seu Lado Me Fez Bem, Me Fez Feliz
    E Que Eu Havia Realizado Mais Um Sonho Meu Que Envolve Você E Mais Uma Grande Conquista. Foi Incrivel Minha Princesa, Uma Experiencia
    Unica E Muito Boa. Não Tiramos Fotinha Quando Fui La Dessa Vez, Mas Temos Fotinha Da 2° Vez Ou 3° O Link Ta Aqui.",

  );


  if (isset($_GET['id']) && $_GET['id'] != '') {

    $postId = $_GET['id'];

    if (array_key_exists($postId, $titulos) && array_key_exists($postId, $imagens) && array_key_exists($postId, $textos)) {
      echo '<div class="container-fluid menuu" style="background-color: #600">
      <div class="row">
        <div class="col-12">
          <div class="menu">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #600 !important">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="http://localhost/Site/home.html">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/Site/sobre.html">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/Site/musicas.php">Músicas</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/Site/fotos.html">Fotos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="http://localhost/Site/videos.html">Vídeos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="row gsrg">
        <div id="carouselExampleAutoplaying2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="./imagens/banner1.jpg" alt="" />
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="./imagens/banner2.jpg" alt="" />
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="./imagens/banner3.jpg" alt="" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <div style="width: 100%; border-bottom: 3px solid black"></div>';

      echo '<div class="container mt-5">
    <div class="row">
    <div class="col-md-6 col-12">
    <h1>' . $titulos[$postId] . '</h1>
    <p class="mt-5" style="color:black;">' . $textos[$postId] . '</p>
    </div>
    <div class="col-md-6 col-12">
    <img class="img-fluid mt-5" src="' . $imagens[$postId] . '">
    </div>
    </div>
    </div>';
    } else {

      echo "Título da notícia não encontrado!";
    }
  } else {
    echo "ID da notícia não encontrado!";
  }
  ?>
</body>

</html>