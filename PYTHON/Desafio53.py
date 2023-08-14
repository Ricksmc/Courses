frase = input('Digite a frase: ').strip().upper()                       # USADO 'strip' PARA RETIRAR OS ESPAÇÕES EM BRANCO ANTES E APÓS A FRASE
palavra = frase.split()                                                 # E 'upper' PARA DEIXXAR A FRASE TODA EM MAIÚSCULA. USADO 'split' PARA
juntar = ''.join(palavra)                                               # SEPARAR A FRASE EM LISTAS E 'join' PARA REMOVER OS ESPAÇOS DENTRO DA FRASE.
inverterpalavra = juntar[::-1]                                          # PEGA A VARIÁVEL 'juntar' E CONTA AS LETRAS DO FINAL PRO COMEÇO USANDO '[::-1]'
print('O inverso de {} é {}'.format(juntar, inverterpalavra))
if inverterpalavra == juntar:
    print('\033[32mTEMOS UM PALÍNDROMO\033[m')
else:
    print('\033[31mA FRASE DIGITADA NÃO É UM PALÍNDROMO\033[m')