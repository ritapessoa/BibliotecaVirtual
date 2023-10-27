## Equipe
- **Amarílis Selene Nunes Silva**: 21511365
- **Arthur Ruman de Bortoli**: 23022752
- **Fabiula Augusta dos Santos**: 21508518
- **Renan de Andrade Joaquim**: 21500398
- **Rita de Cássia Pessoa da Rosa**: 19506996

## Sumário
1. [Introdução](#)
2. [Informação sobre a Empresa](#)
3. [Diagrama de Classes](#)
4. [Wireframes](#)
5. [Diagrama de Casos de Uso](#)
6. [Interessados](#)
7. [Objetivos Funcionais](#)
8. [Objetivos Não Funcionais](#)

## Biblioteca Virtual Universitária
Esse projeto é um sistema web de biblioteca digital com acesso a
diversos trabalhos e pesquisas feitas por alunos concluintes, essa solução visa o objetivo
de facilitar o acesso a informações educacionais.

## Funcionalidades
É possível realizar cadastro, efetuar login, acessar, enviar, realizar download e deletar arquivos. 

## Link - Demonstração da aplicação em funcionamento
 https://www.youtube.com/watch?v=h5UqoZuAQMo
 
### 📋 Pré-requisitos
Para executar o projeto em seu computador é necessário uma IDE de sua preferência (para o projeto foi utilizado o VS Code), instalar o wampServer e configurar no navegador de sua preferência, depois deve ser instalado o MySQL Workbench 8.0.

### 🔧 Configurando
É necessário inicializar o wampServe para criar a conexão (sem senha) no MySQL, onde o banco de dados deve se chamar “sys”.
Deve ser criado duas tabelas: Usuarios (que irá receber os cadastro de Login), com os seguintes parâmetros:
* id: Int, Pk, Nn, Ai.
* nome: varchar(100), nn.
* email: varchar(100), nn.
* senha: varchar(45), nn.
* data_nascimento: date, nn.

 E o Arquivos (que “receberá” os arquivos/livros enviados) que contém os seguintes parâmetros:
* id: Int, Pk, Nn, Ai.
* nome: varchar(100), nn.
* path: varchar(100), nn.
* data_upload: datetime.

Para conseguir visualizar a aplicação pelo Browser o código deve ficar armazenado no seguinte caminho:
C:\wamp\www\TESTE

E dentro dessa pasta “TESTE” que deverá ser criada por vocês, também deve ser criada uma pasta para o armazenamento dos arquivos, com o nome de “arquivos”.

## 🛠️ Construído com
* HTML
* CSS
* PHP
* Bootstrap

## Implementações futuras
Esse projeto é um trabalho em andamento, será adicionado algumas exceções no código para que ele atenda melhor aos casos de uso e será feita uma melhoria no design do sistema.

## Colaboradores
* Rita de Cássia - ritapessoa
* Fabiula Santos - fabiulasantos
* Renan Joaquim - rejoaquim
* Amarílis Selene - amarilisselene
* Arthur Ruman - ArthurRuman



