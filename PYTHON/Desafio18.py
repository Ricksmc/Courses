import math # importando a biblioteca math <-- matemática
from math import cos,sin, tan # importando da biblioteca matemática os métodos sin, cos e tan
v = int(input('Digite o valor do ângulo: ')) # como o valor que irá ser digitado será apenas um número inteiro, coloca-se
                                             # o 'int' antes do 'input' para que seja armazenado na variável 'v' o valor
vr = math.radians(v) # utilizado o método 'math.radians' para converter o valor contido em 'v', de inteiro para radiano e
                     # armazenar na variável 'vr'
print('O Seno do ângulo digitado é {}\n'
      'O Cosseno do ângulo digitado é {}\n'
      'A tangente do ângulo digitado é {}'.format(sin(vr), cos(vr), tan(vr)))