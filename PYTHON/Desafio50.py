soma = 0
for x in range (0, 6):
    v = int(input('Digite um valor: '))
    if v % 2 == 0:
        soma = v + soma
print(soma)