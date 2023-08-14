from datetime import date
soma1 = 0
soma2 = 0
anoatual = date.today().year
for x in range (0, 7):
    ano = int(input('Digite o ano de nascimento: '))
    idade = anoatual - ano
    if idade >= 21:
        soma1 = 1 + soma1
    if idade < 21:
        soma2 = 1 + soma2
print(' ')
print(f'Dos anos digitados, \033[1;32m{soma1}\033[m pessoas são maiores de 18 anos e \033[1;32m{soma2}\033[m pessoas são menores de 18 ')