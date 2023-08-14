nome = input('Qual o seu nome completo? ').strip() # usa-se o método strip para retirar os espaços vazios antes e depois da frase
t = nome.upper() # usa-se o método upper para tornar a frase toda em maiúscula
print('Seu nome tem Silva?: {}'.format('SILVA' in t)) # usado o operador "in" para verificar se na frase existe a palavra determinada pelas
                                                      # aspas simples.

############## PODE FAZER TAMBÉM DA SEGUINTE FORMA ###############

# print('Seu nome tem Silva?: {}'.format('silva' in nome.upper()))

###################################################################