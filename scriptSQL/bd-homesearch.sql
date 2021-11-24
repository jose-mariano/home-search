
-- Criando o banco --
CREATE DATABASE homesearch;
-- Informando o banco --
USE homesearch;

-- Criando tabela dos moderadores --
CREATE TABLE tbl_moderadores (
	id_moderador INT PRIMARY KEY AUTO_INCREMENT,
	email_moderador VARCHAR(50) NOT NULL,
    cpf_moderador CHAR(11) NOT NULL,
    senha_moderador VARCHAR(35) NOT NULL,
    nome_moderador VARCHAR(50) NOT NULL
);

-- Criando tabela dos anunciantes --
CREATE TABLE tbl_anunciantes (
	id_anunciante INT PRIMARY KEY AUTO_INCREMENT,
    nome_anunciante VARCHAR(100) NOT NULL,
    email_anunciante VARCHAR(100) NOT NULL,
    senha_anunciante VARCHAR(35) NOT NULL,
    cpf_anunciante CHAR(11) NOT NULL,
    celular_anunciante CHAR(11) NOT NULL
);

-- Criando tabela dos anuncios --
CREATE TABLE tbl_anuncios (
	id_anuncio INT PRIMARY KEY AUTO_INCREMENT,
    tipo_anuncio SET("vender", "alugar") NOT NULL,
    valor_anuncio FLOAT(10,2) NOT NULL,
    cep_anuncio CHAR(8) NOT NULL,
    rua_anuncio VARCHAR(100) NOT NULL,
    numero_casa_anuncio VARCHAR(7) NOT NULL,
    complemento_anuncio VARCHAR(30),
    bairro_anuncio VARCHAR(30) NOT NULL,
    numero_quartos_anuncio TINYINT NOT NULL,
    numero_vagas_anuncio TINYINT,
    imagem_anuncio VARCHAR(200) NOT NULL,
    data_criacao_anuncio DATETIME NOT NULL,
    disponibilidade_anuncio BOOLEAN NOT NULL,
    cidade_anuncio VARCHAR(50) NOT NULL,
    descricao_anuncio VARCHAR(300) NOT NULL,
    fk_categoria_anuncio INT NOT NULL, 
    fk_anunciante INT NOT NULL
);

CREATE TABLE tbl_categorias (
	id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome_categoria VARCHAR(50) NOT NULL
);

-- Adicionando fk --
ALTER TABLE tbl_anuncios ADD CONSTRAINT FOREIGN KEY (fk_anunciante)
REFERENCES tbl_anunciantes(id_anunciante);

ALTER TABLE tbl_anuncios ADD CONSTRAINT FOREIGN KEY (fk_categoria_anuncio)
REFERENCES tbl_categorias (id_categoria);
