t = 0 # 22
maisv = 0
m = 0
for n in range(1, 5):

    print ('------- {}ª PESSOA ---------- '.format(n))

    nome = str(input('Nome: '))
    idade = int(input('Idade: '))
    sexo = str(input('[M / F]: '))

    t = t + idade

    if sexo == 'M' or sexo == 'm':

        if maisv > idade:

            maisv = idade

    if sexo == 'F' or sexo == 'f' and idade < 20:

        m = m + 1

media = t / 4

print(f'A média de idade do grupo é de {media} anos')
print('O homem mais velho tem {} anos de idade e seu nome é {} '.format(maisv, nome))
print('Ao todo, {} mulheres possuem menos de 20 anos de idade '.format(m))