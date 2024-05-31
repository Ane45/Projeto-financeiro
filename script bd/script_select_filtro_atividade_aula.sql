-- Relatório 1

    select usu.nome_usuario as 'Nome do usuário', 
           cat.nome_categoria as 'Nome da categoria'
      from tb_usuario as usu
inner join tb_categoria as cat
        on usu.id_usuario = cat.id_usuario
     where nome_usuario like '%a%';

-- Relatório 2

	select usu.nome_usuario as 'Nome do usuário', 
           cat.nome_categoria as 'Nome da categoria'
      from tb_usuario as usu
inner join tb_categoria as cat
        on usu.id_usuario = cat.id_usuario
	 where cat.id_usuario = 3;

-- Relatório 3

    select cat.nome_categoria as 'Nome da categoria',
           emp.nome_empresa as 'Nome da empresa',
           usu.nome_usuario as 'Nome do usuário',
           date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
           mov.valor_movimento as 'Valor do movimento',
           mov.tipo_movimento as 'Tipo do movimento'
	  from tb_movimento as mov
inner join tb_usuario as usu
        on mov.id_usuario = usu.id_usuario
inner join tb_categoria as cat
		on cat.id_categoria = mov.id_categoria
inner join tb_empresa as emp
        on emp.id_empresa = mov.id_empresa
	 where mov.tipo_movimento = 1;
	   

-- Relatório 4

    select con.banco_conta as 'Nome do banco',
           con.numero_conta as 'Numero da conta',
           cat.nome_categoria 'Nome da categoria',
           emp.nome_empresa as 'Nome da empresa',
           usu.nome_usuario as 'Nome do usuário',
           date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
           mov.valor_movimento as 'Valor do movimento',
		   mov.tipo_movimento as 'Tipo do movimento'
	  from tb_movimento as mov
inner join tb_usuario as usu
        on mov.id_usuario = usu.id_usuario
inner join tb_categoria as cat
		on cat.id_categoria = mov.id_categoria
inner join tb_empresa as emp
        on emp.id_empresa = mov.id_empresa
inner join tb_conta as con
		on con.id_conta = mov.id_conta
	 where mov.tipo_movimento = 1 
       and (mov.id_usuario = 3 or mov.id_usuario = 4);
       
-- Relatório 5

    select con.banco_conta as 'Nome do banco',
           con.numero_conta as 'Numero da conta',
           cat.nome_categoria 'Nome da categoria',
           emp.nome_empresa as 'Nome da empresa',
           usu.nome_usuario as 'Nome do usuário',
           date_format(mov.data_movimento, "%d/%m/%Y") as 'Data do movimento',
           mov.valor_movimento as 'Valor do movimento',
           usu.data_cadastro as 'Data do cadastro',
		   mov.tipo_movimento as 'Tipo do movimento'
	  from tb_movimento as mov
inner join tb_usuario as usu
        on mov.id_usuario = usu.id_usuario
inner join tb_categoria as cat
		on cat.id_categoria = mov.id_categoria
inner join tb_empresa as emp
        on emp.id_empresa = mov.id_empresa
inner join tb_conta as con
		on con.id_conta = mov.id_conta
	 where mov.tipo_movimento = 1 or mov.tipo_movimento = 2
	   and data_cadastro between '2020-01-01' and '2024-01-08';
