create database oficina;
use oficina;

create table clientes (
cod_cliente int auto_increment primary key not null,
nome varchar(30),
cpf varchar(20),
email varchar(100),
endereco varchar(255)
);

CREATE TABLE veiculos (
    cod_veiculo INT AUTO_INCREMENT PRIMARY KEY,
    cod_cliente INT NOT NULL,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    ano INT,
    placa VARCHAR(10),
    cor VARCHAR(20),
    
    
    CONSTRAINT fk_veiculo_cliente
        FOREIGN KEY (cod_cliente) REFERENCES clientes(cod_cliente)
        ON DELETE CASCADE
    );
    
    
    