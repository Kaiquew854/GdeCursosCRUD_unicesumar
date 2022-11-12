# GdeCursosCRUD_unicesumar

Se coloque na posição de desenvolvedor (a) WEB, que quer iniciar com vendas de cursos produzidos por si mesmo. Atualmente o escopo do sistema será "bem reduzido", tendo apenas um painel de controle autenticado e que possibilite inserir, listar, editar e excluir alunos e cursos. Nesta versão os alunos não terão acesso a este sistema. Para isso, você irá utilizar a linguagem PHP com paradigma de POO, o SGDB Mysql e o PDO para se comunicar com um banco de dados relacional. Para isso siga as orientações abaixo.

1 – Crie um projeto com o o numero do seu RA, por exemplo: RA1234565
2 – Crie as estruturas de pastas conforme trabalhamos em aula
3 - Codifique uma classe chamada de Student, e que este tenha os atributos privados: id, name, email, password, phone, course, status (ativo ou inativo), created_at, e updated_at.
4 - Codifique uma classe chamada Courses, e que esta tenha os atributos privados: id, nameCourse, description, dateStart, dateFinish, status, created_at, e updated_at.
5 - O nome da sua base deve ser a palavra RA seguido do seu numero. Exemplo: RA1234565. Os nomes e os campos das tabelas devem ser idênticos ao das classes. Confira abaixo o que será armazenado em cada campo das tabelas.
Students = id (inteiro e identificador único), name (nome do aluno), email (email), password (senha), phone (telefone de contato), course (idCourse), status (ativo ou inativo), created_at (timeStamp), e updated_at (timeStamp).
Courses = id (inteiro e identificador único), nameCourse (nome do curso), description (descrição do curso), dateStart (data de inicio), dateFinish (data de término), status (ativo ou inativo), created_at (timeStamp), e updated_at (timeStamp).

6 – Fazer uma tela de login que permita a entrada de usuário e senha, e se autentique com duas constantes (usuário e senha, que no qual o usuário será o seu RA e a senha será o seu Primeiro Nome) pré-definidas no seu sistema, de forma que só você possa se autenticar. Sugiro que utilize session para mante-se logado no sistema (Obs.: não é necessário utilizar banco de dados para armazenar os dados de acesso, e nem CRUD para gerencia-lo).
7 – O seu Painel de controle deve ter um menu (lateral ou horizontal) contendo dois itens, Alunos e Cursos, ao clicar sobre o item Alunos, apresentar um botão para incluir e, a relação de alunos contendo os botões: visualizar, editar e excluir para cada aluno listado, o mesmo acontece para cursos.
8 - Exportar a sua Base de Dados de forma que possibilite o seu tutor realizar a sua importação. Colocar o arquivo gerado dentro da pasta do projeto

