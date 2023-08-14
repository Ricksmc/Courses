for x in range (4, 0, -1):
    print(x)
print('###' * 15)
for x in range (0, 5, 2):
    print(x)
print('###' * 15)
n = int(input('Digite um número: '))
for n in range(0, n+1):
    print(n)
print('###' * 15)
i = int(input('INICIO: '))
f = int(input('FIM: '))
p = int(input('PASSO: '))
for x in range(i, f+1, p):
    print(x)
print('###' * 15)
s = 0
for c in range (0, 3):
    n = int(input('Digite um valor: '))
    s += n
print('O somatório de todos os valores foi {}'.format(s))