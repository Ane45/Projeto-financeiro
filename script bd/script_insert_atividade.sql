-- FUNCIONARIO 1

insert into tb_empresa
(nome, cnpj)
values
('Roupas da moda','39169174000118');

insert into tb_acesso
(login, senha, status, empresa_id, funcionario_id)
values
('Otavio405','456987', 1, 1, 1);

insert into tb_pais
(nome)
values
('Brasil');

insert into tb_estado
(estado, pais_id)
values
('Pr', 1);

insert into tb_cidade
(nome, estado_id)
values
('Londrina', 2);

insert into tb_endereco
(rua, bairro, cep, status, cliente_id, empresa_id, funcionario_id, cidade_id)
values
('rua antonio flaviano corsa', 'centro', '89564823', 1, null, 1, 1, 1 );

insert into tb_funcionario
(nome, data_admissao, data_demissao, empresa_id)
values
('Otavio', '2022-05-10', null, 1);

insert into tb_cargo
(nome_cargo, descricao)
values
('Vendedor', 'Vendedor de roupas');

insert into tb_cargo_funcionario
(funcionario_id, cargo_id, data_inicio, data_fim)
values
(1, 1 , '2021-06-20', null);

insert into tb_cliente
(nome, data_nascimento, observacao, funcionario_id)
values
('Ana Maria', '1998-07-20', null, 1);

insert into tb_endereco
(rua, bairro, cep, status, cliente_id, empresa_id, funcionario_id, cidade_id)
values
('rua pedro de frota', 'alphaville', '45987236', 1, 1, null, 1, 1 );


-- FUNCIONARIO 2

insert into tb_empresa
(nome, cnpj)
values
('Roupas da moda','39169174000118');

insert into tb_acesso
(login, senha, status, empresa_id, funcionario_id)
values
('Carlos987','596387', 1, 1, 9);

insert into tb_pais
(nome)
values
('Brasil');

insert into tb_estado
(estado, pais_id)
values
('Pr', 1);

insert into tb_cidade
(nome, estado_id)
values
('Londrina', 2);

insert into tb_endereco
(rua, bairro, cep, status, cliente_id, empresa_id, funcionario_id, cidade_id)
values
('rua antonio flaviano corsa', 'centro', '89564823', 1, null, 1, 9, 1 );

insert into tb_funcionario
(nome, data_admissao, data_demissao, empresa_id)
values
('Carlos Antonio', '2021-10-25', null, 1);

insert into tb_cargo
(nome_cargo, descricao)
values
('Atendente', 'Atende os clientes pessoalmente e via telefone');

insert into tb_cargo_funcionario
(funcionario_id, cargo_id, data_inicio, data_fim)
values
(9, 9 , '2021-10-26', null);

insert into tb_cliente
(nome, data_nascimento, observacao, funcionario_id)
values
('Clarice', '1996-08-28', null, 9);

insert into tb_endereco
(rua, bairro, cep, status, cliente_id, empresa_id, funcionario_id, cidade_id)
values
('rua adelino viera', 'silvino', '98234567', 1, 4, null, 9, 1 );


