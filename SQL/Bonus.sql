
/*
BÔNUS
1) Escreva uma consulta SQL para trazer todos os dados. Seja criativo.
*/
DELIMITER $$
CREATE PROCEDURE AllData()
BEGIN

    SELECT * FROM ALUNO;
    
    SELECT * FROM RESPONSAVEL;
    
    SELECT * FROM PARENTESCO;
END$$
DELIMITER ;

CALL AllData();