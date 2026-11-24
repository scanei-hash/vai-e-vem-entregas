Vai & Vem Entregas

Projeto acadêmico desenvolvido para a disciplina de Fundamentos ao Desenvolvimento Web – Unoesc.

O sistema apresenta os serviços da empresa fictícia Vai & Vem Entregas e permite o cadastro de contatos e depoimentos, utilizando PHP e banco de dados MySQL.

Tecnologias utilizadas

- HTML5
- CSS3
- Bootstrap 5
- JavaScript
- PHP
- MySQL

Estrutura dos arquivos

- "index.php" – página principal do site.
- "conexao.php" – conexão com o banco de dados.
- "salvar_contato.php" – gravação das mensagens de contato.
- "salvar_depoimento.php" – gravação dos depoimentos.
- "listar_depoimentos.php" – consulta dos depoimentos cadastrados.
- "servico1.html", "servico2.html" e "servico3.html" – páginas dos serviços.
- "css/estilo.css" – estilos personalizados.
- "imagens/" – imagens e ilustrações do projeto.
- "vai_e_vem_entregas.sql" – estrutura e dados do banco de dados.

Banco de dados

Nome do banco: "vai_e_vem_entregas"

Tabelas:

- "contatos"
- "depoimentos"
- "serviços"

Como executar o projeto localmente

1. Instale e abra o XAMPP.
2. Inicie os serviços Apache e MySQL.
3. Coloque a pasta do projeto dentro de "htdocs".
4. Acesse "http://localhost/phpmyadmin".
5. Crie o banco de dados "vai_e_vem_entregas".
6. Importe o arquivo "vai_e_vem_entregas.sql".
7. Confira as configurações de acesso ao banco no arquivo "conexao.php".
8. Acesse o projeto pelo navegador usando o endereço local correspondente à pasta.

Observação sobre a publicação

O GitHub pode ser utilizado para armazenar e compartilhar o código-fonte do projeto. Entretanto, o GitHub Pages não executa PHP nem disponibiliza banco de dados MySQL. Para utilizar todas as funcionalidades do sistema, é necessário um servidor com suporte a PHP e MySQL.

Autoria

Projeto desenvolvido para fins acadêmicos na Unoesc.