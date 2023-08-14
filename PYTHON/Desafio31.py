km = int(input('Digite a distância percorrida na viagem: '))
if km <= 200:
    preco = km * 0.5
    print('O valor a pagar pela viagem é de {:.2f} reais'.format(preco))
else:
    preco = km * 0.45
    print('O valor a pagar pela viagem é de {:.2f} reais'.format(preco))
