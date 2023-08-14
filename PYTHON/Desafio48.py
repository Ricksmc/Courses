cont = 0
soma = 0
for x in range (1, 501, 2): #ao colocar o 2, estou ignorando os números que são pares e aceitndo apenas os ímpares no laço.
    if x % 3 == 0:
        cont = cont + 1  # também poderia utilizar "cont += 1"
        soma = soma + x  # também poderi utilizar "soma += x"
print ('A soma de todos os {} valores é {}'.format(cont, soma))