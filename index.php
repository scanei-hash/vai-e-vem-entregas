<?php
require_once "listar_depoimentos.php";
require_once "conexao.php";

$sql = "SELECT * FROM serviços";
$stmt = $conexao->query($sql);
$servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serviços de Entrega | Vai & Vem Entregas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<script>
    const formulario = document.querySelector(
        'form[action="salvar_contato.php"]'
    );

    formulario.addEventListener("submit", function() {

        const botao = formulario.querySelector(
            'button[type="submit"]'
        );

        botao.textContent = "Enviando...";
        botao.disabled = true;

    });
</script>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="imagens/logo.svg"
                    alt="Vai & Vem Entregas"></a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span
                    class="navbar-toggler-icon"></span></button>
            <div id="nav" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#empresa">Empresa</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#depoimentos">Depoimentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1>Seu pedido no caminho certo.</h1>
                    <p class="lead">Entregas rápidas, agendadas e cuidadosas para pessoas e empresas.</p>
                    <a href="#servicos" class="btn btn-primary btn-lg me-2">Conheça os serviços</a>
                    <a href="https://wa.me/5549989008090?text=Olá!%20Gostaria%20de%20solicitar%20um%20orçamento."
                        class="btn btn-outline-light btn-lg"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                </div>
                <div class="col-lg-5 text-center mt-4 mt-lg-0"><img src="imagens/servico1.svg"
                        class="img-fluid rounded-4" alt="Serviço de entrega"></div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title mb-4">Serviços em destaque</h2>
            <div id="destaques" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img src="imagens/servico1.svg" class="d-block w-100"
                            alt="Entrega Expressa">
                        <div class="carousel-caption">
                            <h3>Entrega Expressa</h3>
                            <p>Prioridade para quem tem pressa.</p>
                        </div>
                    </div>
                    <div class="carousel-item"><img src="imagens/servico2.svg" class="d-block w-100"
                            alt="Entrega Agendada">
                        <div class="carousel-caption">
                            <h3>Entrega Agendada</h3>
                            <p>Você escolhe o melhor horário.</p>
                        </div>
                    </div>
                    <div class="carousel-item"><img src="imagens/servico3.svg" class="d-block w-100"
                            alt="Transporte de Itens Frágeis">
                        <div class="carousel-caption">
                            <h3>Itens Frágeis</h3>
                            <p>Cuidado especial com sua encomenda.</p>
                        </div>
                    </div>
                </div><button class="carousel-control-prev" type="button" data-bs-target="#destaques"
                    data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
                <button class="carousel-control-next" type="button" data-bs-target="#destaques"
                    data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
            </div>
        </div>
    </section>

    <section id="servicos" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Catálogo de serviços</h2>
         <div class="row g-4">

    <?php foreach ($servicos as $servico): ?>

        <div class="col-md-4">
            <div class="card service-card">
                <img src="imagens/servico<?= $servico['id'] ?>.svg"
     class="card-img-top"
     alt="<?= htmlspecialchars($servico['nome']) ?>">

                <div class="card-body">
                    <?php if ($servico["nome"] == "Entrega expressa"): ?>
    <span class="badge badge-custom">Urgente</span>

<?php elseif ($servico["nome"] == "Entrega agendada"): ?>
    <span class="badge badge-custom">Flexível</span>

<?php elseif ($servico["nome"] == "Transporte de encomendas"): ?>
    <span class="badge badge-custom">Cuidado especial</span>

<?php endif; ?>

                    <h3 class="h4 mt-2">
                        <?= htmlspecialchars($servico["nome"]) ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($servico["descricao"]) ?>
                    </p>

                    <p class="price">
                        A partir de R$ <?= number_format($servico["preco"], 2, ",", ".") ?>
                    </p>

                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
 </section>

    <section id="empresa" class="py-5">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Sobre a Vai & Vem</h2>
                    <p>A Vai & Vem Logística e Entregas nasceu com a proposta de tornar o envio de mercadorias mais
                        simples, organizado e confiável. A empresa fictícia foi criada para atender pessoas e pequenos
                        negócios que precisam de praticidade no dia a dia.</p>
                    <p>Com foco em pontualidade, cuidado e comunicação clara, a equipe acompanha cada etapa da entrega e
                        busca oferecer uma experiência tranquila tanto para quem envia quanto para quem recebe.</p>
                    <div class="accordion" id="valores">
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#missao">Missão</button></h2>
                            <div id="missao" class="accordion-collapse collapse show">
                                <div class="accordion-body">Facilitar a movimentação de encomendas com agilidade,
                                    cuidado e atendimento próximo.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#visao">Visão</button></h2>
                            <div id="visao" class="accordion-collapse collapse">
                                <div class="accordion-body">Ser reconhecida pela confiança e qualidade no serviço de
                                    entregas.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><button class="accordion-button collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#val">Valores</button></h2>
                            <div id="val" class="accordion-collapse collapse">
                                <div class="accordion-body">Pontualidade, responsabilidade, respeito, cuidado e
                                    transparência.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-box">
                        <h3>Dados da empresa</h3>
                        <p><strong>Razão social:</strong> Vai & Vem Logística e Entregas Ltda.</p>
                        <p><strong>Nome fantasia:</strong> Vai & Vem Entregas</p>
                        <p><strong>Slogan:</strong> Sua encomenda no caminho certo.</p>
                        <p><strong>Atendimento:</strong> segunda a sábado, das 8h às 18h.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

require_once "conexao.php";

$sql = "SELECT * FROM depoimentos ORDER BY id DESC";
$stmt = $conexao->query($sql);
$depoimentos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
    <section id="depoimentos" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">O que nossos clientes dizem</h2>
            <form action="salvar_depoimento.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Depoimento</label>
        <textarea name="depoimento" class="form-control" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Data</label>
        <input type="date" name="data" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar depoimento</button>
</form>
<div class="row g-4">

    <?php foreach ($depoimentos as $item): ?>

        <div class="col-md-4">
            <div class="info-box testimonial">

                <p>
                    "<?= htmlspecialchars($item["depoimento"]) ?>"
                </p>

                <strong>
                    <?= htmlspecialchars($item["nome"]) ?>
                </strong>

                <br>

                <small>
                    <?= date("d/m/Y", strtotime($item["data"])) ?>
                </small>

            </div>
        </div>

    <?php endforeach; ?>

</div>
</section>

    <section id="contato" class="py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="section-title">Entre em contato</h2>
                    <?php if (isset($_GET["contato"]) && $_GET["contato"] == "sucesso"): ?>
    <div class="alert alert-success" role="alert">
        Mensagem enviada com sucesso! Agradecemos seu contato.
    </div>
<?php endif; ?>
                    <form action="salvar_contato.php" method="POST">
                        <div class="mb-3"><label class="form-label">Nome</label><input name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email"
                                class="form-control" required></div>
                        <div class="mb-3"><label class="form-label">Mensagem</label><textarea name="mensagem" class="form-control"
                                rows="5" required></textarea></div><button class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="info-box">
                        <h3>Fale conosco</h3>
                        <p><i class="bi bi-envelope"></i> contato@vaievementregas.com.br</p>
                        <p><i class="bi bi-telephone"></i> (49) 9 8900-8090</p>
                        <p><i class="bi bi-whatsapp"></i> WhatsApp disponível para orçamentos</p>
                        <p><i class="bi bi-instagram"></i> @vaievementregas</p><a class="btn btn-primary"
                            href="https://wa.me/5549989008090?text=Olá!%20Gostaria%20de%20saber%20mais%20sobre%20as%20entregas.">Conversar
                            pelo WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1"><strong>Vai & Vem Logística e Entregas Ltda.</strong></p>
            <p class="mb-1">Rua das Palmeiras, 322-D, Centro, Chapecó - SC, CEP 89814-110</p>
            <p class="mb-1">Telefone/WhatsApp: (49) 9 8900-8090 · contato@vaievementregas.com.br</p>
            <p class="small mb-0">Desenvolvido por Sandrileia Canei · © 2026 Vai & Vem Entregas</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const formulario = document.querySelector(
        'form[action="salvar_contato.php"]'
    );

    if (formulario) {
        formulario.addEventListener("submit", function(event) {
            event.preventDefault();

            const botao = formulario.querySelector(
                'button[type="submit"]'
            );

            botao.textContent = "Enviando...";
            botao.disabled = true;

            setTimeout(function() {
                formulario.submit();
            }, 1000);
        });
    }
</script>
</body>

</html>