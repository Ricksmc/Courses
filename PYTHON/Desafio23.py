n = int(input('Digite um número: '))

unid = n // 1 % 10 # pega o valor digitado e divide pelo inteiro de 1 e depois pega o resto da divisão por 10
dez = n // 10 % 10 # pega o valor digitado e divide pelo inteiro de 10 e depois pega o resto da divisão por 10
cent = n // 100 % 10 # pega o valor digitado e divide pelo inteiro de 100 e depois pega o resto da divisão por 10
milhar = n // 1000 % 10 # pega o valor digitado e divide pelo inteiro de 1000 e depois pega o resto da divisão por 10

print('''Unidade: {} 
Dezena: {}
Centena: {}
Milhar: {}'''.format(unid,dez,cent,milhar))