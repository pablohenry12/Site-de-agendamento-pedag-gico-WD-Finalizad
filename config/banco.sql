CREATE DATABASE IF NOT exists sistema_agendamento;
USE sistema_agendamento;

DROP table IF exists Atendimento;
DROP table IF exists Aluno;
DROP table IF exists Pedagoga;

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

-- Tabela Atende
CREATE TABLE Atendimento (
    data DATE NOT NULL,
    hora TIME NOT NULL,
    turma VARCHAR(10),
    descricao TEXT,
    codigo_pedagoga VARCHAR(20) NOT NULL,
    matricula_aluno VARCHAR(20) NOT NULL,
    FOREIGN KEY (codigo_pedagoga) REFERENCES Pedagoga(siape),
    FOREIGN KEY (matricula_aluno) REFERENCES Aluno(matricula)
);


INSERT INTO Pedagoga (siape, nome, senha) VALUES (123456, 'Maria Clara', '123456');
