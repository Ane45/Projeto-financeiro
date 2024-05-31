-- PRIMEIRO

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Renata','renata@gmail.com','renata123','2022-10-02');

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Auto peças','43991568796','Rua das molas 56', 3);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa das Fritas','43995895639','Rua Cuiabá 130', 3);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Santander','8896','567895', 1500.00, 3);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Bradesco','3658','398465', 3000.53, 3);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Peças', 3);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Alimentaçao', 3);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-10-03', 100, null, 5, 5, 5, 3);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2023-03-19', 120, null, 6, 6, 6, 3);

-- SEGUNDO

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Eduardo','eduardo@gmail.com','956874','2021-09-22');

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa das piscinas','43984596235','Rua das piscinas 903', 4);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Brinquedoteca','43988695142','Rua antonio carlos 1020', 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Itau','8053','896345', 1800.00, 4);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Sicoob','8963','504069', 2100.00, 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Piscina', 4);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Brinquedo', 4);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-11-23', 250, 'Pagamento recebido', 7, 7, 7, 4);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-05-10', 50, 'Pagamento do brinquedo', 8, 8, 8, 4);

-- TERCEIRO

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('David','davidjunior@gmail.com','david5698','2023-07-29');

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa das teclas','43988945678','Rua pedro alvares 254', 5);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Milk shake e bebibas','43984569825','Rua santo da platina 69', 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Nubank','8053','896345', 986.09, 5);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Sicredi','8963','504069', 608.98, 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Instrumentos', 5);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Bebidas', 5);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2022-05-07', 2000, 'Salário', 9, 9, 9, 5);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2023-08-09', 1000, 'Entrada do teclado', 10, 10, 10, 5);

-- QUARTO

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Olivia','livia89@gmail.com','509876','2021-09-14');

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Artigos Culinários','43991458678','Rua monte branco 45', 6);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Turismo Boa fé','43991796582','Rua mato grosso 304', 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco do Brasil','4569','893214', 850.00, 6);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Pic pay','4698','021456', 900.84, 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Artigos de cozinha', 6);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Viagens', 6);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2021-04-21', 3000, 'Venda efetuada', 11, 11, 11, 6);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-02-05', 2000, 'Viagem agendada', 12, 12, 12, 6);

-- QUINTO

insert into tb_usuario
(nome_usuario, email_usuario, senha_usuario, data_cadastro) 
values
('Clara','clara@gmail.com','clara5698','2022-08-06');

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Móveis e Eletrodomésticos','43984569878','Rua peba rolim 96', 7);

insert into tb_empresa
(nome_empresa, telefone_empresa, endereco_empresa, id_usuario)
values
('Empresa Flores e Plantas','43988653214','Rua salto grande 020', 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Caixa','9658','504789', 1200.70, 7);

insert into tb_conta
(banco_conta, agencia_conta, numero_conta, saldo_conta, id_usuario)
values
('Banco Pan','3658','398465', 500.26, 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Eletrodomésticos', 7);

insert into tb_categoria
(nome_categoria, id_usuario)
values
('Flores', 7);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(1, '2023-03-24', 400, null, 13, 13, 13, 7);

insert into tb_movimento
(tipo_movimento, data_movimento, valor_movimento, obs_movimento, id_empresa, id_conta, id_categoria, id_usuario)
values
(2, '2022-07-25', 150, null, 14, 14, 14, 7);
