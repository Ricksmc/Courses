v = int(input('Digite a velocidade que o carro passou (em Km/h): '))
multa = (v - 80) * 7
if v > 80:
    print('O carro ultrapassou o limite permitido e o valor da multa é de {} reais'.format(multa))
else:
    print('O carro passou dentro do limite de velocidade permitida.')