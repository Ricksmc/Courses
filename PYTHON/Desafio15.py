dias = int(input('Digite a quantidade de dias utilizados: '))
km = float(input('Digite a quantidade de km percorridos: '))

pkm = km * 0.15
pd = dias * 60

total = pkm + pd

print('O valor total a pagar pelo aluguel do veículo é de {:.2f} R$'.format(total))