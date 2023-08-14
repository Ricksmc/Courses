# CALCULO DE IMC

peso  = float(input('Digite seu peso (EM KG): '))
altura = float(input('Digite sua altura (EM CENTIMETROS): '))

imc = peso / (altura * altura)

if imc < 18.5:
    print('ABAIXO DO PESO')
elif 18.5 <= imc <= 25:
    print('PESO IDEAL')
elif 25 > imc <= 30:
    print('SOBREPESO')
elif 30 < imc <= 40:
    print('OBESIDADE')
else:
    print('OBESIDADE MÓRBIDA')