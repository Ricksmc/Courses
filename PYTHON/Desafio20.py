from random import shuffle  # estou pegando(from) da biblioteca 'random' apenas o método 'shuffle'
n1 = input('Digite o nome do primeiro aluno: ') # atribuindo à variável n1 a primeira string
n2 = input('Digite o nome do segundo aluno: ') # atribuindo à variável n2 a segunda string
n3 = input('Digite o nome do terceiro aluno: ') # atribuindo à variável n3 a terceira string
n4 = input('Digite o nome do quarto aluno: ') # atribuindo à variável n4 a quarta string

alunos = [n1, n2, n3, n4] # colocando as strings num array
random.shuffle(alunos) # o método random vai embaralhar os valores do array e 0 método shuffle pega a sequência,
                       # já embaralhadaa, reorganiza a ordem dos itens e armazena dentro da variável alunos o
                       # a primeira variável do array.

print('De acordo com o sorteio realizado, as apresentações serão realizadas na seguinte ordem:')
print(alunos)