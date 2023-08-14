print('\033[1;30;47m RICARDO SANTOS MELO CUNHA \033[m')
print('\033[37m RICARDO SANTOS MELO CUNHA \033[m')
print('\033[32m RICARDO SANTOS MELO CUNHA \033[m')
print('\033[7;40m RICARDO SANTOS MELO CUNHA \033[m')
print('\033[7;33;40m RICARDO SANTOS MELO CUNHA \033[m')
print('')
n1 = int(input('Digite o primeiro valor: '))
n2 = int(input('Digite o segundo valor: '))
print('O primeiro valor digitado foi \033[32m{}\033[m e o segundo valor foi \033[31m{}\033[m'.format(n1, n2))
print('')
nome = input('Digite seu nome: ')
print('Seja muito bem-vindo, Sr. {}{}{}'.format('\033[1;32m', nome, '\033[m'))
print('')
n = 'Ricardo Cunha'
cores = {
    'limpar': '\033[m',
    'verde': '\033[32m',
    'amarelo': '\033[33m'
}
print('Muito prazer em te conhecer {}{}{}!!!'.format(cores['verde'], n, cores['limpar']))