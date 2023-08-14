termo = int(input('Digite o valor do primeiro termo da PA: '))
razao = int(input('Digite o valor da razão da PA: '))
n = 10

vlr = termo + (n - 1) * razao
vlr = vlr + 1
for x in range(termo, vlr, razao):

    print(x)