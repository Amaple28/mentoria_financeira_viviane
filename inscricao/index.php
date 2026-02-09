<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestra - Planeje, organize e viva além das contas com Viviane Nunes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/png">
</head>

<body>
    <?php if (isset($_GET['sucesso'])): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 15px; text-align: center;">
            ✅ Inscrição realizada com sucesso! Parabéns pela decisão, nos vemos dia 20/06.
        </div>
    <?php endif; ?>


    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Planeje, organize e viva além das contas</h1>
                <div class="hero-divider"></div>
                <p class="hero-subtitle">Aprenda a planejar, se organizar e viver os sonhos de Deus</p>
                <div class="event-date">20 DE JUNHO | 19H00</div>
                <a href="#inscricao-form" class="cta-button">Garantir minha vaga</a>
            </div>
        </div>
    </header>

    <!-- Event Details -->
    <section class="details-section">
        <div class="container">
            <div class="details-container">
                
                <div class="details-content">
                    <h2 class="section-title">Sobre o Evento</h2>
                    <p>No dia 20 de junho, vou te ajudar a dar o primeiro passo nessa transformação na Palestra Presencial: Planeje, organize e viva além das contas.</p>

                    <p><strong>Você vai aprender:</strong></p>
                    <ul class="details-list"> 
                        <li><i class="fas fa-check-circle"></i> Como planejar seus sonhos;</li>
                        <li><i class="fas fa-check-circle"></i> Como começar a sair das dívidas (mesmo que pareça impossível);</li>
                        <li><i class="fas fa-check-circle"></i> Compreensão da motivação para o consumo;</li>
                        <li><i class="fas fa-check-circle"></i> Como aplicar princípios que transformam não só suas finanças, mas sua vida como um todo.</li>
                        <li><i class="fas fa-check-circle"></i> <strong>Local:</strong> Presencial | Rua Erê, 236 - Prado, Igreja Batista Centrada </li>
                        <li><i class="fas fa-check-circle"></i> <strong>Investimento:</strong> Gratuito (vagas limitadas)</li>
                    </ul>

                    <!--<p>Esta é sua oportunidade de aprender com uma das maiores especialistas em educação financeira do país e dar o primeiro passo rumo à liberdade que você merece.</p>-->
                </div>

                <div class="details-image">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.989803592082!2d-43.9622985898175!3d-19.921795837974514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6976a40a4ba55%3A0x1f0ea89996e7fdce!2sIgreja%20Centrada!5e1!3m2!1spt-BR!2sbr!4v1749652568328!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--<img src="https://images.unsplash.com/photo-1436262513933-a0b06755c784?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Palestra Liberdade Financeira">-->
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="inscricao" class="cta-section">
        <div class="container">
            <h2 class="section-title">Garanta sua vaga agora</h2>
            <p class="section-subtitle">As vagas são limitadas para garantir a melhor experiência para todos os participantes</p>
            <a href="#inscricao-form" class="cta-button">Quero me inscrever gratuitamente</a>
        </div>
    </section>

    <!-- Speaker Section -->
    <section class="speaker-section">
        <div class="container">
            <div class="speaker-container">
                <img src="viviane.jpg" alt="Viviane Nunes" class="speaker-photo">
                <div class="speaker-content">
                    <h2>Viviane Nunes</h2>
                    <p>
                        Já ministrou palestras para centenas de pessoas.
                        É mentora em planejamento financeiro pessoal e teve a alegria de ajudar diversas pessoas a saírem de dívidas impagáveis e a realizarem seus sonhos.
                        Tem hoje como propósito auxiliar microempreendedores e pessoas comuns a crescerem com segurança, equilíbrio e direção com princípios bíblicos.
                    </p>
                    <span class="speaker-signature">Viviane Nunes</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Inscrição -->
    <section class="cta-section" id="inscricao-form" style="background-color: #f9f9f9; padding: 50px 0;">
        <div class="container" style="max-width: 600px; margin: auto; text-align: center;">
            <h2 class="section-title" style="font-size: 32px; margin-bottom: 10px; color: #1c2a39;">Garanta sua vaga!</h2>

            <form action="processa_inscricao.php" method="POST" style="text-align: left;">
                <div style="margin-bottom: 20px;">
                    <label for="nome" style="display: block; font-weight: 500; margin-bottom: 5px;">Nome completo*</label>
                    <input type="text" id="nome" name="nome" required
                        style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="email" style="display: block; font-weight: 500; margin-bottom: 5px;">E-mail*</label>
                    <input type="email" id="email" name="email" required
                        style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;">
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="telefone" style="display: block; font-weight: 500; margin-bottom: 5px;">Telefone/WhatsApp*</label>
                    <input type="text" id="telefone" name="telefone" required
                        style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 8px; font-size: 16px;">
                </div>

                <button type="submit"
                    style="width: 100%; background-color: #d4af37; border: none; color: #1c2a39; padding: 14px; font-size: 18px; font-weight: bold; border-radius: 25px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); cursor: pointer; transition: background-color 0.3s;">
                    INSCREVER-SE
                </button>
            </form>


        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-logo">Viviane Nunes Finanças</div>
            <p class="footer-text">Transformando vidas através da educação financeira. Nosso compromisso é ajudar você a construir um futuro financeiro próspero e seguro com propósito em Deus.</p>
            <div class="social-links">
                <a href="https://www.instagram.com/vinunesconsultoria/" class="social-link"><i class="fab fa-instagram"></i></a>
                <a href="https://wa.me/5531973260005" class="social-link"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.youtube.com/@canaldoempreendedorvn" class="social-link"><i class="fab fa-youtube"></i></a>
            </div>
            <p class="copyright">
                © 2025 Viviane Nunes Finanças. Todos os Direitos Reservados. Developed by
                <a href="https://github.com/Amaple28" target="_blank" style="color:white;">Maisa Rodrigues</a>
            </p>
        </div>
    </footer>
</body>

</html>
