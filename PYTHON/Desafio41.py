from datetime import date
data_atual = date.today()
ano_atual = '{}'.format(data_atual.year)
anoatual = int(ano_atual)
ano = int(input('Digite o ano de seu nascimento: '))

idade = anoatual - ano

if idade <= 9:

    print('\033[31m CATEGORIA MIRIM \033[m')

elif 10 < idade <= 14:

    print('\033[32m CATEGORIA INFANTIL \033[m')

elif 15 < idade <= 19:

    print('\033[33m CATEGORIA JUNIOR \033[m')

elif idade == 20:

    print('\033[34m CATEGORIA SENIOR \033[m')

else:

    print('\033[35m CATEGORIA MASTER \033[m')