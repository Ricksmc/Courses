import math
co = float(input('Digite o valor do cateto oposto: '))
ca = float(input('Digite o valor do cateto adjacente: '))
print('A hipotenusa dos valores digitados é {:.2f}'.format(math.hypot(co,ca))) # utlizado o método 'math.hypot' para calcular
                                                                               # automaticamente a hipotenusa dos catetos, sem
                                                                               # precisar utilizar fórmulas matemáticas.