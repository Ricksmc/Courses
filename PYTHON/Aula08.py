'''
import math
n = int(input('Digite um número inteiro: '))
raiz = math.sqrt(n)
print('A raiz quadrada de {} é {}'.format(n, math.ceil(raiz))) #utilizada a funcionalidade ceil da biblioteca math
                                                               #para arredondar para cima o resultado da raiz.

print('A raiz quadrade de {} é {}'.format(n, math.floor(raiz))) #utilizada a funcionalidade ceil da biblioteca math
                                                                #para arredondar para baixo o resultado da raiz.
'''

'''
# Para utilizar apenas uma funcionalidade específica da biblioteca, utiliza-se o seguinte comando de importação:
import math
from math import sqrt,floor

n = int(input('Digite um valor inteiro: '))
raiz = sqrt(n)
print('A raiz de {} é {:.2f}'.format(n, floor(raiz)))

'''
# se quiser que o computador gere números aleatórios pode utilizar a biblioeca random
'''
import random
n = random.random() # gera número aleatório do tipo float entre 0 e 1
print(n)
'''
'''
import random
n = random.randint(1,60) # gera número aleatório do tipo inteiro entre 1 e 10
print(n)
'''
# para utilizar emojis
import emoji
print(emoji.emojize('Olá, mundo! :sunglasses:', use_aliases=True))
print(emoji.emojize('Olá, mundo! :earth_americas:', use_aliases=True))
