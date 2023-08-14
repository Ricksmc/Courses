from math import floor                                          # importa da biblioteca math apenas o método floor
n = float(input('Digite um valor: '))                           # como o usuário pode digitar qualquer valor, utiliza-se float
print('O número {} tem a parte inteira {}'.format(n, floor(n))) # o método floor vai ignorar o valor após a vírgular e
                                                                # apresentar apenas o valor inteiro abaixo.
                                                                # ex.: 16.7 = 16