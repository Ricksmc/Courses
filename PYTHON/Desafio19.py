'''
import random
n1 = input('Digite o nome do primeiro aluno: ')
n2 = input('Digite o nome do segundo aluno: ')
n3 = input('Digite o nome do terceiro aluno: ')
n4 = input('Digite o nome do quarto aluno: ')

esc = random.randint(1,4)

if esc == 1: print('O aluno escolhido foi {}'.format(n1))
elif (esc == 2): print('O aluno escolhido foi {}'.format(n2))
elif (esc == 3): print('O aluno escolhido foi {}'.format(n3))
else: print('O aluno escolhido foi {}'.format(n4))
'''

# FORMA MAIS FÁCIL DE SOLUCIONAR O PROBLEMA

from random import choice # pega(from) da biblioteca 'random' o método choice(escolhe)
n1 = input('Digite o nome do primeiro aluno: ') # atribui à variável n1 a string digitada
n2 = input('Digite o nome do segundo aluno: ') # atribui à variável n2 a string digitada
n3 = input('Digite o nome do terceiro aluno: ') # atribui à variável n3 a string digitada
n4 = input('Digite o nome do quarto aluno: ') # atribui à variável n4 a string digitada

alunos = [n1, n2, n3, n4] # cria um array na variável alunos
escolhido = choice(alunos) # armazena na variável 'escolhido' a string escolhida automaticamente, ao usar o método choice.
print('O aluno escolhido para apagar o quadro foi {}'.format(escolhido))

# pode utilizar também este código para apresentar o resultado

print(f'O aluno escolhido para apagar o quadro foi {escolhido}')