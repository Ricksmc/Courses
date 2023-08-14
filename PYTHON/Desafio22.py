nome = input('Digite o nome completo da pessoa: ').strip() # usa-se o método strip para retirar os espaços vazios antes e depois da frase

print('O nome completo da pessoa em maiúsculo é: ', nome.upper()) # usa o método 'upper' para transformar toda a frase em maiúscula
print('O nome completo da pessoa em minúsculo é: ', nome.lower()) # usa o método 'lower' para transformar toda a frase em minúscula
print('O nome possui {} letras'.format(len(nome) - nome.count(' '))) # usa o método 'len' para contar todas as letras e, utilizando
                                                                     # o ' - nome.count(' '), o programa vai retirar todos os espaços
                                                                     # vazios no meio da frase.
divide = nome.split() # pega a frase e usa o método 'split' para separar a frase em listas
print('Seu primeiro nome é {} e ele tem {} letras'.format(divide[0], len(divide[0]))) # ao utilizar 'divide[0], estou pegando a primeira
                                                                                  # posição da lista feita no split e mostrando a palvra
                                                                                  # que está contida nesta posição. Já o comando
                                                                                  # 'len(divide[0], vai mostrar quantas letras tem na
                                                                                  # palavra contida na posição 0.