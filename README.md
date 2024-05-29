# Instruções para Execução
## Pré-requisitos

***1. Instalação***

Antes de começar, você precisará ter o seguinte software instalado em seu computador:

   >[XAMPP](https://www.apachefriends.org/index.html)

<br>

***2. Clonar o Repositório***

Clone este repositório para o diretório `htdocs` do XAMPP. O diretório `htdocs` geralmente está localizado no seguinte caminho:
    
- **Windows:** `C:\xampp\htdocs\`
- https://github.com/CaioVieiraFlor/sales-panel.git

    > cd /caminho/para/htdocs

    > git clone https://github.com/CaioVieiraFlor/sales-panel.git

<br>

***3. Iniciar o XAMPP***

Abra o painel de controle do XAMPP e inicie os seguintes serviços:

- **Apache**
- **MySQL**

<br>

***4. Criação da Base de Dados***

Esse projeto irá fazer uso de um banco de dados, siga os passos abaixo para configura-lo:

> Já no painel de controle do **XAMPP**: <br><br> Clique no botão **Admin** ao lado do MySQL para abrir o phpMyAdmin no navegador. Isso geralmente abrirá o phpMyAdmin na seguinte URL: [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

> No phpMyAdmin, execute o script contido no arquivo `BD.sql` fornecido no diretório clonado. 

<br>

***5. Acessar o projeto***

Agora basta abrir o navegador e acessar o projeto através da seguinte URL:

> http://localhost/sales-panel
