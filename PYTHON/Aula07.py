'''
nome = input('Qual é o seu nome? ')
print('Prazer em te conhecer {:^20}!'.format(nome)) #USANDO DENTRO DAS CHAVES :^ PARA ALINHAR O NOME NO CENTRO
'''
'''
nome = input('Qual é o seu nome? ')
print('Prazer em te conhecer {:=^20}!'.format(nome)) #SÃO INSERIDOS SINAIS DE IGUAIS COM O NOME NO CENTRO
'''
'''
n1 = int(input('Digite um valor: '))
n2 = int(input('Digite outro valor: '))     #PROCEDIMENTO MAIS FÁCIL PARA SOMAR DOIS VALORES
print('A soma vale {} '.format(n1+n2))
'''
nome = input('Digite seu nome: ')
sobrenome = input('Digite seu sobrenome: ')

print(f'O seu nome completo é {nome} {sobrenome}')
