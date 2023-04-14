-- SQLBook: Code
CREATE DATABASE hipocrates;

USE hipocrates;

CREATE TABLE
    IF NOT EXISTS relacoes(
        cpf_responsavel BIGINT,
        nome_mae VARCHAR(80) NOT NULL,
        nome_pai VARCHAR(80) NOT NULL,
        nome_responsavel VARCHAR(80),
        nome_conjuge VARCHAR(80),
        PRIMARY KEY (cpf_responsavel)
    ) DEFAULT CHARSET utf8mb4;

CREATE TABLE
    IF NOT EXISTS paciente(
        foto LONGBLOB,
        cpf BIGINT NOT NULL,
        cpf_responsavel BIGINT,
        rg BIGINT NOT NULL UNIQUE,
        cns int not null,
        nome VARCHAR(80) NOT NULL,
        genero ENUM("Masculino", "Feminino") NOT NULL,
        data_nascimento DATE NOT NULL,
        orgao_emissor ENUM(
            "SSP",
            "PC",
            "PM",
            "DETRAN",
            "DPF",
            "CREA",
            "OAB",
            "CRM",
            "COREN",
            "CRO"
        ) NOT NULL,
        estado_civil ENUM(
            "Solteiro",
            "Casado",
            "Viúvo",
            "Divorciado",
            "União Estável"
        ) NOT NULL,
        limitacoes SET (
            "Cognitiva",
            "Locomoção",
            "Audição",
            "Sem Deficiência "
        ) NOT NULL,
        etinia ENUM ("Negro", "Branco", "Pardo") NOT NULL,
        tipo_saguineo ENUM(
            "A+",
            "A-",
            "B+",
            "B-",
            "AB+",
            "AB-",
            "O+",
            "O-"
        ),
        dataHora TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY(cpf),
        FOREIGN KEY (cpf_responsavel) REFERENCES relacoes (cpf_responsavel)
    ) DEFAULT CHARSET utf8mb4;

CREATE TABLE
    IF NOT EXISTS endereco(
        cpf_paciente BIGINT,
        cep VARCHAR(8) NOT NULL,
        logradouro VARCHAR(255) NOT NULL,
        numero VARCHAR(6) NOT NULL,
        complemento VARCHAR(255) NULL,
        bairro VARCHAR(255) NOT NULL,
        cidade VARCHAR(255) NOT NULL,
        estado CHAR(2) NOT NULL,
        FOREIGN KEY (cpf_paciente) REFERENCES paciente (cpf)
    ) DEFAULT CHARSET utf8mb4;

CREATE TABLE
    contato(
        cpf_paciente BIGINT,
        phone_DDD BIGINT NOT NULL,
        phone_fixe BIGINT NULL,
        email VARCHAR(50),
        FOREIGN KEY (cpf_paciente) REFERENCES paciente (cpf)
    ) DEFAULT CHARSET utf8mb4;

CREATE TABLE
    IF NOT EXISTS edu_tra(
        cpf_paciente BIGINT,
        escolaridade ENUM (
            "Analfabeto",
            "Ensino Fundamental",
            "Ensino Médio",
            "Ensino Superior"
        ) NOT NULL,
        profissao VARCHAR(100),
        empresa VARCHAR(100),
        FOREIGN KEY (cpf_paciente) REFERENCES paciente (cpf)
    ) DEFAULT CHARSET utf8mb4;

CREATE TABLE
    IF NOT EXISTS medico(
        cpf BIGINT NOT NULL,
        crm INT NOT NULL UNIQUE,
        nome_medico VARCHAR(50) NOT NULL,
        categoria ENUM (
            'Clinico Geral',
            'Odontologia',
            'Psicologia'
        ),
        PRIMARY KEY (cpf)
    ) DEFAULT CHARSET utf8mb4;

CREATE TABLE
    IF NOT EXISTS consulta(
        id INT AUTO_INCREMENT,
        cpf_paciente BIGINT,
        cpf_medico BIGINT,
        data_consulta DATE NOT NULL,
        local_consulta ENUM(
            'Hospital Municipal Djalma Marques - Socorrão I',
            'Hospital Municipal Clementino Moura - Socorrão II',
            'Hospital Aquiles Lisboa',
            'Hospital Carlos Macieira',
            'Hospital Dr. Adelson de Sousa Lopes',
            'Hospital Genésio Rêgo',
            'Hospital Infantil Dr. Juvêncio Mattos',
            'Hospital Nina Rodrigues',
            'Hospital Universitário da UFMA'
        ) NOT NULL,
        horario TIME NOT NULL,
        tipo_atendimento ENUM (
            'Clinico Geral',
            'Odontologia',
            'Psicologia'
        ),
        observaçoes TEXT,
        stts_paciente ENUM (
            "Ausente",
            "Presente",
            "Consulta cancelada"
        ),
        PRIMARY KEY(id),
        FOREIGN KEY (cpf_paciente) REFERENCES paciente (cpf),
        FOREIGN KEY (cpf_medico) REFERENCES medico (cpf)
    ) DEFAULT CHARSET utf8mb4;

SELECT * FROM paciente;

SELECT * FROM endereco;

SELECT * FROM contato;

SELECT * FROM relacoes;

SHOW TABLES;

DROP DATABASE hipocrates;