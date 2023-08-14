nome = input('Digite seu nome: ').strip()
salario = float(input('Digite o valor do seu salário: '))
valor = float(input('Digite o valor do imóvel que deseja comprar: '))
tempo = int(input('Digite a quantidade de meses  que deseja pagar o imóvel: '))
print(' ')
prest = valor / tempo
print(f'Valor da prestação: {prest}')
print(' ')
trintap = (30 / 100) * salario
print(f' 30% do seu salário corresponde ao valor de R$ {trintap}')
print(' ')
if (prest > trintap):
    print('Prezado {}, de acordo com nossa análise, o valor solicitado de {} não poderá ser liberado pois excede 30% do seu salário.'.format(nome, valor))
    print('')
    print('\033[33m EMPRÉSTIMO NEGADO')
else:
    print('Prezado {}. De acordo com nossa análise, o valor solicitado de {} poderá ser liberado pois a prestação não excede 30% do seu salário'.format(nome, valor))
    print(' ')
    print('\033[34m EMPRÉSTIMO LIBERADO')