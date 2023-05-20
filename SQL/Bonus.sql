
/*
BÔNUS
1) Escreva uma consulta SQL para trazer todos os dados. Seja criativo.
*/
DELIMITER $$
CREATE PROCEDURE AllData()
BEGIN
-- Tabela ALUNO
    SELECT * FROM ALUNO;
    
-- Tabela RESPONSAVEL
    SELECT * FROM RESPONSAVEL;
    
-- Tabela PARENTESCO
    SELECT * FROM PARENTESCO;
END$$
DELIMITER ;

CALL AllData();