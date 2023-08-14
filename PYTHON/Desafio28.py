import random
from random import randint
print('***' * 20)
print('Vou pensar em um número entre 0 e 5. Tente adivinhar...')
print('***' * 20)
num = int(input('Em que número eu pensei? '))
pc = random.randint(0, 5)
if num == pc:
    print(f'O NÚMERO QUE EU PENSEI FOI {pc}')
    print(' ')
    print('PARABÉNS! VOCÊ VENCEU')
else:
    print(f'O NÚMERO QUE EU PENSEI FOI {pc}')
    print(' ')
    print('QUE PENA! VOCÊ PERDEU')