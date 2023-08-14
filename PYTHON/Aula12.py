# USANDO A ESTRUTURA CONDICIONAL ANINHADA IF, ELIF E ELSE
# ESTOU USANDO UM EXEMPLO INVENTADO POR MIM MESMO E NÃO O EXEMPLO DEMONSTRADO PELO PROFESSOR
estado = input('Digite o nome do Estado em que você mora: ').strip()
uf = estado.upper()
if (uf == 'PE') or (uf =='PB') or (uf =='AL') or (uf =='BA') or (uf =='CE') or (uf =='RN') or (uf =='SE') or (uf =='MA') or (uf =='PI'):
    print('Você mora na região \033[35m Nordeste')
elif (uf == 'SP') or (uf =='RJ') or (uf =='MG') or (uf =='ES'):
    print('Você mora na região \033[31m Sudeste')
elif (uf == 'PR') or (uf =='SC') or (uf =='RS'):
    print('Você mora na região \033[32m Sul')
elif (uf == 'GO') or (uf =='MT') or (uf =='MS') or (uf =='DF'):
    print('Você mora na região \033[33m Centro-Oeste')
else:
    print('Você mora na região \033[34m Norte')