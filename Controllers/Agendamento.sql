CREATE DATABASE sistema_agendamento;
USE sistema_agendamento;

-- Tabela Pedagoga
CREATE TABLE Pedagoga (
    siape VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(35) NOT NULL
);

-- Tabela Aluno
CREATE TABLE Aluno (
    matricula VARCHAR(20) PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    senha VARCHAR(30) NOT NULL
);
SHOW CREATE TABLE Atende;
DROP TABLE IF EXISTS Atende;


-- Tabela Atende
CREATE TABLE Atendimento (
    data DATE NOT NULL,
    hora TIME NOT NULL,
    turma VARCHAR(10),
    descricao TEXT,
    siape_pedagoga VARCHAR(20) PRIMARY KEY,
    matricula_aluno VARCHAR(20) PRIMARY KEY,
    FOREIGN KEY (siape_pedagoga) REFERENCES Pedagoga(siape),
    FOREIGN KEY (matricula_aluno) REFERENCES Aluno(matricula)
);


INSERT INTO Pedagoga (siape, nome, senha) VALUES (123456, 'Maria Clara', '123456');
