
/*
1) Escreva comandos SQL para inserir os dados abaixo conforme o diagrama
apresentado.
a) Pablo é Pai de Lucas
b) Brenda é Mãe de Lucas
*/

--Aluno
INSERT INTO ALUNO (ID, NOME) VALUES (1, 'Lucas');

--Responsavel
INSERT INTO RESPONSAVEL (ID, NOME) VALUES (1, 'Pablo');
INSERT INTO RESPONSAVEL (ID, NOME) VALUES (2, 'Brenda');

--Parentesco
INSERT INTO PARENTESCO (PARENTESCO, IDALUNO, IDRESONSAVEL) VALUES ('Pai', 1, 1);
INSERT INTO PARENTESCO (PARENTESCO, IDALUNO, IDRESONSAVEL) VALUES ('Mãe', 1, 2);