from fpdf import FPDF

class MentoriaFinanceiraPDF(FPDF):
    def header(self):
        self.set_font("DejaVuSans", "B", 16) # Usando a fonte personalizada
        self.set_text_color(255, 255, 255)
        self.set_fill_color(10, 30, 60)  # Azul-marinho
        self.cell(0, 15, "MENTORIA FINANCEIRA VIVIANE NUNES", ln=True, align="C", fill=True)
        self.ln(5)

    def add_section(self, title, content):
        self.set_font("DejaVuSans", "B", 14) # Usando a fonte personalizada
        self.set_text_color(10, 30, 60)
        self.cell(0, 10, title, ln=True)
        self.set_font("DejaVuSans", "", 12) # Usando a fonte personalizada
        self.set_text_color(0, 0, 0)
        self.multi_cell(0, 8, content)
        self.ln(4)

pdf = MentoriaFinanceiraPDF()
# --- Adição da fonte UTF-8 ---
pdf.add_font('DejaVuSans', '', 'DejaVuSans.ttf', uni=True) # uni=True é crucial para UTF-8
pdf.add_font('DejaVuSans', 'B', 'DejaVuSans-Bold.ttf', uni=True) # Se tiver versão bold
# ------------------------------

pdf.add_page()

# Seções principais baseadas no conteúdo fornecido
pdf.add_section("Pare de sobreviver. Chegou a hora de prosperar!",
    "Você já se sentiu perdido em meio a contas, despesas e sonhos distantes? A falta de planejamento financeiro pode te impedir de realizá-los.\n\n"
    "Muitas pessoas vivem no piloto automático, acumulando dívidas e adiando projetos. Mas você não precisa mais passar por isso sozinho(a).\n\n"
    "Existe um caminho para transformar sua vida financeira, e ele começa aqui."
)

pdf.add_section("O que você vai conquistar",
    "- Controle Financeiro: Identifique todas as suas despesas e receitas para ter clareza sobre seu dinheiro.\n"
    "- Metas Alcançáveis: Estabeleça objetivos financeiros com um plano passo a passo para realizá-los.\n"
    "- Orçamento Eficaz: Crie um sistema de orçamento que funcione para você."
)

pdf.add_section("Depoimento de Aluna",
    "“Antes da mentoria, meu maior desafio era sair das dívidas. Com a orientação da Viviane, aprendi a lidar com meu dinheiro e entendi que dinheiro não aceita desaforo! "
    "Consegui economizar, quitar uma dívida impagável e conquistei minha liberdade financeira. Hoje, valorizo cada centavo. "
    "Se você está na dúvida, só digo uma coisa: faça! Vai transformar sua vida financeira pra sempre.”\n\n"
    "- Neia Resende, Aluna da Mentoria"
)

pdf.add_section("Conteúdo da Mentoria",
    "01 - Análise de despesas vs receitas\n"
    "02 - Identificação de vazamentos\n"
    "03 - Como sair das dívidas\n"
    "04 - Orçamento pessoal\n"
    "05 - Análise do Projeto dos Sonhos\n"
    "06 - Compreensão da motivação para o consumo"
)

pdf.add_section("Horários disponíveis para atendimento",
    "Mentoria em Grupo:\n"
    "- Segundas: 19h30 às 20h30\n"
    "- Sábados: 9h30 às 10h30/11\n"
    "- Sábados: 15h às 16h30/17h\n"
    "Os encontros são online (ao vivo)."
)

pdf.add_section("Investimento", 
    "Mentoria em Grupo:\n"
    "- Pacote de 4 encontros: R$ 250 à vista ou 12x de R$ 25,86 (Total: R$ 310,32 com juros)"
)

pdf.add_section("O que está incluído", 
    "- 5 módulos com aulas ao vivo\n"
    "- Apostila 'Planejamento Pessoal e Financeiro'\n"
    "- 4 planilhas financeiras editáveis\n"
    "- Atividades práticas e suporte exclusivo\n"
    "- E-book exclusivo: 'Princípios Bíblicos Aplicados aos Negócios e Finanças'"
)

pdf.add_section("Sobre Viviane Nunes", 
    "Mentora em planejamento financeiro pessoal. Já palestrou para centenas de pessoas e ajudou diversas famílias a saírem de dívidas impagáveis.\n\n"
    "Seu propósito é auxiliar microempreendedores e pessoas comuns a crescerem com equilíbrio, segurança e princípios bíblicos."
)

pdf.add_section("Sua jornada começa agora", 
    "Garanta sua vaga e dê o primeiro passo rumo à liberdade financeira.\n\n"
    "Mentoria Financeira Viviane Nunes - Transformando vidas através da educação financeira com propósito em Deus."
)

# Gerar e salvar o PDF final
output_path = "Mentoria_Financeira_Viviane_Nunes_Grupo.pdf"
pdf.output(output_path, 'F')
print(f"PDF gerado com sucesso em: {output_path}")