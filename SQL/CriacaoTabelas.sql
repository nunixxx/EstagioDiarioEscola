--CRIAÇÃO DAS TABELAS

CREATE TABLE ALUNO(
    ID INT PRIMARY KEY,
    NOME TEXT NOT NULL
);
CREATE TABL E RESPONSAVEL(
    ID INT PRIMARY KEY,
    NOME TEXT NOT NULL
);
CREATE TABLE PARENTESCO(
    PARENTESCO TEXT NOT NULL,
    IDALUNO INT,
    IdResonsavel INT,
    FOREIGN KEY (IDALUNO) REFERENCES ALUNO (ID),
    FOREIGN KEY (IdResonsavel) REFERENCES RESPONSAVEL (ID)
);