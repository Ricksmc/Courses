a = float(input('Digite o comprimento da primeira reta: '))
b = float(input('Digite o comprimerto da segunda reta: '))
c = float(input('Digite o comprimento da terceira reta: '))

if ((abs(b - c) < a < b + c) or (abs(a - c) < b < a + c) or (abs(a - b) < c < a + b)):

    print('De acordo com os valores digitados, há condição satisfatória para se formar um triÂngulo')

    if (a == b) and (b == c):

        print('TRIANGULO EQUILÁTERO')

    elif (a == b) or (a == c) or (b == c):

        print('TRIANGULO ISOSCELES')

    else:

        print('TRIANGULO ESCALENO')


else:

    print('De acordo com os valores digitados, não há condição para se formar um triÂngulo')