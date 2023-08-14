frase = input('Digite uma frase: ').strip() # usa-se o método strip para retirar os espaços vazios antes e depois da frase
t = frase.upper() # usa-se o método upper para tornar a frase toda em maiúscula
print('A letra "A" aparece {} vezes na frase'.format(t.count('A'))) # o método count vai contar quantas letras "A" existem na frase
print('A primeira letra "A" apareceu na posição {}'.format(t.find('A'))) # o método find vai informar em que posição aparece a primeira letra "A" na frase
print('A última letra "A" apareceu na posição {}'.format(t.rfind('A'))) # o método rfind vai informar em que posição, começando pela direita da frase, vai
                                                                        # aparecer a letra "A".