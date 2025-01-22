CREATE DATABASE sistema_agendamento;
USE sistema_agendamento;

-- Tabela Pedagoga
CREATE TABLE Pedagoga (
    siape INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(20) NOT NULL
);

-- Tabela Aluno
CREATE TABLE Aluno (
    matricula INT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(20) NOT NULL,
    telefone VARCHAR(15)
);

-- Tabela Atende
CREATE TABLE Atende (
    data DATE NOT NULL,
    hora TIME NOT NULL,
    turma VARCHAR(5),
    descricao TEXT,
    siape_pedagoga INT NOT NULL,
    matricula_aluno INT NOT NULL,
    FOREIGN KEY (siape_pedagoga) REFERENCES Pedagoga(siape),
    FOREIGN KEY (matricula_aluno) REFERENCES Aluno(matricula)
);
