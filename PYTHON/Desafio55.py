maiorp = 0                                                                      # INICIA O 'maiorp' E 'menorp' EM ZERO.
menorp = 0
for x in range(1, 6):                                                           # INICIA UMA CONTAGEM DE 1 A 6 LENDO O PESO DE 5 PESSOAS

    peso = float(input('Digite o peso da {}ª pessoa: '.format(x)))

    if x == 1:                      # NA PRIMEIRA LEITURA PEGA O VALOR DIGITADO E LANÇA NO 'maiorp' E 'menorp'

        maiorp = peso
        menorp = peso

    else:                           # NA PRIMEIRO LAÇO 'for' O COMANDO 'else' NÃO SERÁ EXECUTADO

        if peso > maiorp:                                                               # NA SEGUNDA CONTAGEM, O COMANDO 'if" NÃO SERÁ EXECUTADO POIS 'x' NÃO
                                                                                        # É IGUAL A 1, SENDO ASSIM O PROGRAMA SEGUIRÁ PARA O 'else' E FARÁ A
            maiorp = peso                                                               # CONDICIONAL: SE O VALOR 'peso' DIGITADOR FOR MAIOR QUE 'maiorp', A
                                                                                        # VARIÁVEL 'maiorp' RECEBERÁ ESTE NOVO VALOR, SENÃO O VALOR DIGITADO
        if peso < menorp:                                                               # SERÁ ALOCADO NA VARIÁVEL 'menorp'.

            menorp = peso

print('O maior peso é {:.1f} e o menor peso é {:.1f}'.format(maiorp, menorp))