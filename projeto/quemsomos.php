<!DOCTYPE html>
<!-- Comentário: DOCTYPE define que é um documento HTML5 -->
<html lang="pt-br">
<!-- Comentário: a tag <head> contém informações sobre a página -->
<head>
    



<!-- Comentário: div com class="cta" (call-to-action = chamada para ação) -->
        <div class="cta">
            <!-- Comentário: links estilizados como botões para navegar para outras páginas -->
            <a class="btn" href="index.php">Home</a>
            <a class="btn" href="faleconosco.php">Fale Conosco</a>
        </div>




    <!-- Comentário: define o tipo de caracteres (UTF-8 = letras do mundo inteiro) -->
    <meta charset="UTF-8">
    <!-- Comentário: viewport ajusta o site para celulares -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Comentário: título que aparece na aba do navegador -->
    <title>Quem Somos</title>
    <!-- Comentário: carrega o arquivo CSS (estilo visual) -->
    <link rel="stylesheet" href="quemsomos.css">
</head>
<body>

    <!-- Comentário: <header> é o cabeçalho da página (com class="hero" para estilo especial) -->
    <header class="hero">
        <!-- Comentário: <h1> é o título principal (maior e mais importante) -->
        <h1>Quem Somos</h1>
        <!-- Comentário: <p> é um parágrafo de texto simples -->
        <p class="lead">Empresa de aluguel de carros — atendimento rápido, frota moderna e suporte.</p>
    </header>

    <!-- Comentário: <main> contém o conteúdo principal da página -->
    <main class="container">

        <!-- Comentário: <section> agrupa conteúdo relacionado. Esta seção tem class="about" -->
        <section class="about">
            <!-- Comentário: <div class="card"> é um bloco com fundo escuro para destacar info -->
            <div class="card">
                <!-- Comentário: <h2> é um subtítulo (menor que h1) -->
                <h2>Missão</h2>
                <p>Oferecer mobilidade com qualidade e preço justo.</p>
            </div>

            <div class="card">
                <h2>Visão</h2>
                <p>Ser referência local em locação de veículos.</p>
            </div>

            <div class="card">
                <h2>Valores</h2>
                <p>Transparência, segurança e respeito ao cliente.</p>
            </div>
        </section>

        <!-- Comentário: Nova seção para a equipe da empresa -->
        <section class="team">
            <!-- Comentário: outro subtítulo -->
            <h2>Nossa Equipe</h2>
            <!-- Comentário: <div class="team-list"> é um container que lista os membros -->
            <div class="team-list">
                <div class="member">
                    <strong>Adalberto</strong>
                    <div>Fundador</div>
                </div>
                <div class="member">
                    <strong>Marco Lyra
                    <div>Atendimento</div>
                </div>
                <div class="member">
                    <strong>Ian Costa</strong>
                    <div>Atendimento</div>
                </div>
            </div>
        </section>

        <!-- Comentário: Seção FAQ (Perguntas Frequentes) -->
        <section class="faq">
            <h2>Perguntas Frequentes</h2>

            <!-- Comentário: <details> cria uma seção retrátil (clica para abrir/fechar) -->
            <details>
                <!-- Comentário: <summary> é o título da pergunta que clica para abrir -->
                <summary>Como faço para alugar um carro?</summary>
                <p>Escolha o veículo, informe o número de diárias e confirme a reserva na página indicada.</p>
            </details>

            <details>
                <summary>Quais formas de pagamento?</summary>
                <p>Aceitamos cartão e transferência. Detalhes são informados na confirmação.</p>
            </details>

            <details>
                <summary>Como alterar ou cancelar uma reserva?</summary>
                <p>Entre em contato pelo telefone ou e-mail informado no site o quanto antes.</p>
            </details>
        </section>

        

    </main>

</body>
</html>

