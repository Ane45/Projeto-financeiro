-- Relatório 1

	select usu.nome_usuario as 'Nome do usuário', 
           cat.nome_categoria as 'Nome da Categoria'
	  from tb_categoria as cat
inner join tb_usuario as usu
        on cat.id_usuario = usu.id_usuario;


-- Relatório 2

    select usu.nome_usuario as 'Nome do Usuário',
           emp.nome_empresa as 'Nome da Empresa',
           emp.telefone_empresa as 'Telefone da Empresa',
           emp.endereco_empresa as 'Endereço da Empresa'
	  from tb_empresa as emp
inner join tb_usuario as usu
        on emp.id_usuario = usu.id_usuario;
        
-- Relatório 3

	select usu.nome_usuario as 'Nome do usuário',
           con.banco_conta as 'Nome do banco',
           con.saldo_conta as 'Saldo da conta',
           con.numero_conta as 'Número da conta',
           usu.email_usuario as 'Email do usuário'
      from tb_conta as con
inner join tb_usuario as usu
        on con.id_usuario = usu.id_usuario;
        
-- Relatório 4
	
    select date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
		   mov.tipo_movimento as 'Tipo do movimento',
           mov.valor_movimento as 'Valor do movimento',
           usu.nome_usuario as 'Nome do usuário'
	  from tb_movimento as mov
inner join tb_usuario as usu
        on mov.id_usuario = usu.id_usuario;
        
-- Relatório 5

	select date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
           mov.tipo_movimento as 'Tipo do Movimento',
           mov.valor_movimento as 'Valor do Movimento',
           usu.nome_usuario as 'Nome do usuario',
           cat.nome_categoria as 'Nome da categoria'
	  from tb_movimento as mov
inner join tb_usuario as usu
		on mov.id_usuario = usu.id_usuario
inner join tb_categoria as cat
		on cat.id_usuario = usu.id_usuario;
        
-- Relatório 6

	select cat.nome_categoria as 'Nome da categoria',
           emp.nome_empresa as 'Nome da empresa',
           usu.nome_usuario as 'Nome do usuário',
           date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
           mov.valor_movimento as 'Valor do movimento',
           usu.email_usuario as 'Email do usuário'
	  from tb_movimento as mov
inner join tb_usuario as usu
        on mov.id_usuario = usu.id_usuario
inner join tb_categoria as cat
		on cat.id_categoria = mov.id_categoria
inner join tb_empresa as emp
        on emp.id_empresa = mov.id_empresa;
        
-- Relatório 7

    select con.banco_conta as 'Nome do banco',
           con.numero_conta as 'Numero da conta',
           cat.nome_categoria 'Nome da categoria',
           emp.nome_empresa as 'Nome da empresa',
           usu.nome_usuario as 'Nome do usuário',
           date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
           mov.valor_movimento as 'Valor do movimento'
	  from tb_movimento as mov
inner join tb_usuario as usu
        on mov.id_usuario = usu.id_usuario
inner join tb_categoria as cat
		on cat.id_categoria = mov.id_categoria
inner join tb_empresa as emp
        on emp.id_empresa = mov.id_empresa
inner join tb_conta as con
		on con.id_conta = mov.id_conta;



           