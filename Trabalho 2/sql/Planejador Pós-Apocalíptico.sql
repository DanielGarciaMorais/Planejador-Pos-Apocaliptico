/* Lógico_1: */

CREATE TABLE Assentamentos (
    idAssentamento INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    agua INTEGER,
    alimento INTEGER,
    defesa INTEGER,
    quantColonos INTEGER
);

CREATE TABLE Colonos (
    idColono INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    cargo VARCHAR(255),
    fk_Assentamentos_idAssentamento INT,
    dataNascimento DATE,
    sexo CHAR(1)
);

CREATE TABLE Items (
    idItem INT AUTO_INCREMENT PRIMARY KEY,
    valor DOUBLE,
    nome VARCHAR(255),
    fk_Assentamentos_idAssentamento INT,
    peso DOUBLE
);
 
ALTER TABLE Colonos ADD CONSTRAINT FK_Colonos_2
    FOREIGN KEY (fk_Assentamentos_idAssentamento)
    REFERENCES Assentamentos (idAssentamento)
    ON DELETE CASCADE;
 
ALTER TABLE Items ADD CONSTRAINT FK_Items_2
    FOREIGN KEY (fk_Assentamentos_idAssentamento)
    REFERENCES Assentamentos (idAssentamento)
    ON DELETE CASCADE;
