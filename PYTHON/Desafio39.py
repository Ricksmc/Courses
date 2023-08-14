import math
from datetime import date
anoatual = date.today().year
anonasc = int(input('Digite o ano do seu nascimento: '))

idade = anoatual - anonasc

if idade < 18:

    tempo = 18 - idade
    print('Faltam \033[1;34m{}\033[m ano(s) para você se alistar no serviço militar.'.format(tempo))

elif idade == 18:

    print('Você está na idade para se alistar no serviço militar!')

else:
    tempo = idade - 18
    print('Já se passaram \033[1;34m{}\033[m ano(s) para se alistar no serviço militar'.format(tempo))