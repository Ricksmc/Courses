nome = input('Digite o nome do funcionário: ')
sal = float(input('Digite o salário do funcionário: '))

if (sal > 1250):

    aumento = sal * 1.1
    print('O funcionário {} receberá o novo salário no valor de R$ {:.2f}'.format(nome, aumento))

else:

    aumento = sal * 1.15
    print('O funcionário {} receberá o novo salário no valor de R$ {:.2f}'.format(nome, aumento))