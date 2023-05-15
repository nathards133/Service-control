# O Service Control é um sistema para controle de tarefas feito com PHP 8 puro.

# Pré-requisitos
Antes de iniciar, certifique-se de ter o seguinte instalado:

 PHP <br>
 MySQL <br>
 Composer <br>
 Servidor Apache (como o Laragon, Xampp, etc.) <br>
 Configuração <br> 
 Clone o repositório <br>

# Instale as dependências
Depois de clonar o repositório, você precisa instalar as dependências do projeto. Navegue para o diretório do projeto e execute o seguinte comando:

composer install

Configure o banco de dados
Agora você precisa configurar o banco de dados. Primeiro, crie um banco de dados MySQL e, em seguida, execute as seguintes queries para criar as tabelas necessárias:


CREATE TABLE users ( <br>
    id INT AUTO_INCREMENT PRIMARY KEY,  <br>
    username VARCHAR(255) NOT NULL UNIQUE,  <br>
    email VARCHAR(255) NOT NULL UNIQUE,  <br>
    password VARCHAR(255) NOT NULL,  <br>
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP  <br>
);  <br>

CREATE TABLE tasks (  <br>
    id INT AUTO_INCREMENT PRIMARY KEY,  <br>
    title VARCHAR(255) NOT NULL,  <br>
    description TEXT,  <br>
    deadline DATE,  <br>
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  <br>
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,  <br>
    user_id INT,  <br>
    FOREIGN KEY (user_id) REFERENCES users(id)  <br>
);  <br>

# Inicie o servidor
Por fim, inicie o servidor Apache. Se você estiver usando o Laragon, pode fazer isso através do painel de controle do Laragon.

# Uso
Para acessar o sistema, abra o navegador e vá para a URL do servidor local (geralmente http://localhost/, a menos que você tenha alterado a configuração padrão).
