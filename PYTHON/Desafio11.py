l = float(input('Digite a largura da parede em metros: '))
h = float(input('Digite a altura da parede em metros: '))

a = l * h
q = a/2

print('A área da parede é de {}'.format(a))
print('Para pintar toda a parede, serão necessários {} litros de tinta'.format(q))