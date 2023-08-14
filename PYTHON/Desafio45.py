import random
t1 = 'VOCÊ GANHOU!'
t2 = 'VOCÊ PERDEU!'
opt1 = 'PEDRA'
opt2 = 'PAPEL'
opt3 = 'TESOURA'
print('###' * 20)
print('              \033[32m GAME PARA SE DIVERTIR - JOKENPÔ \033[m')
print('###' * 20)
user = int(input('  \033[34m ESCOLHA SUA OPÇÃO (1-PEDRA   2-PAPEL   3-TESOURA)\033[m: '))
computer = random.randint(1, 3)

if (user == 1) and (computer == 1):
    print(f'USUÁRIO: \033[31m {opt1} \033[m')
    print(f'COMPUTADOR: \033[31m {opt1} \033[m')
    print(' ')
    print('JOGUE NOVAMENTE')

elif (user == 2) and (computer == 2):
    print(f'USUÁRIO: \033[31m {opt2} \033[m')
    print(f'COMPUTADOR: \033[31m {opt2} \033[m')
    print(' ')
    print('JOGUE NOVAMENTE')

elif (user == 3) and (computer == 3):
    print(f'USUÁRIO: \033[31m {opt3} \033[m')
    print(f'COMPUTADOR: \033[31m {opt3} \033[m')
    print(' ')
    print('JOGUE NOVAMENTE')

elif (user == 1) and (computer == 3):
    print(f'USUÁRIO: \033[31m {opt1} \033[m')
    print(f'COMPUTADOR: \033[31m {opt3} \033[m')
    print(' ')
    print(t1)
elif (user == 2) and (computer == 1):
    print(f'USUÁRIO: \033[31m {opt2} \033[m')
    print(f'COMPUTADOR: \033[31m {opt1} \033[m')
    print(' ')
    print(t1)
elif (user == 3) and (computer == 2):
    print(f'USUÁRIO: \033[31m {opt3} \033[m')
    print(f'COMPUTADOR: \033[31m {opt2} \033[m')
    print(' ')
    print(t1)
elif (user == 3) and (computer == 1):
    print(f'USUÁRIO: \033[31m {opt3} \033[m')
    print(f'COMPUTADOR: \033[31m {opt1} \033[m')
    print(' ')
    print(t2)
elif (user == 1) and (computer == 2):
    print(f'USUÁRIO: \033[31m {opt1} \033[m')
    print(f'COMPUTADOR: \033[31m {opt2} \033[m')
    print(' ')
    print(t2)
elif (user == 2) and (computer == 3):
    print(f'USUÁRIO: \033[31m {opt2} \033[m')
    print(f'COMPUTADOR: \033[31m {opt3} \033[m')
    print(' ')
    print(t2)