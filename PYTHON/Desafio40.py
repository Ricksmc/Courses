n1 = float(input('Digite a primeira nota: '))
n2 = float(input('Digite a segunda nota: '))

media = (n1 + n2) / 2

if media < 5:

    print('Sua média foi {}, por isso você foi \033[31m REPROVADO \033[m'.format(media))

elif  5 <= media <= 6.9:

    print('Sua média foi {}, por isso você está em \033[33m RECUPERAÇÃO \033[m'.format(media))

else:

    print('Sua média foi {}, por isso você foi \033[32m APROVADO \033[m'.format(media))