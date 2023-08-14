total = 0                                                                               # INICIEI O CONTADOR "total" POIS, QUANDO INICIAR O
num = int(input('Digite um número: '))                                                  # LAÇO "for" VAI HAVER UMA REPETIÇÃO "cont", INICIANDO EM 1
for cont in range(1, num + 1):                                                          # E INDO ATÉ O NÚMERO "num" SENDO QUE FOI COLOCADO "+ 1" POIS
    if num % cont == 0:                                                                 # NA CONTAGEM SEMPRE VAI DE 1 ATÉ O NÚMERO ANTERIOR.
        print('\033[32m', end=' ')                                                      # POR EX.: DE 1 A 50 IRIA CONTAR DE 1 ATÉ 49.
        total = total + 1                                                               # AO ENTRAR NO LAÇO "if" VAI SER VERIFICADA A CONDIÇÃO SE O
    else:                                                                               # RESTO DA DIVISÃO ENTRE "num" E "cont" FOR = 0, O CONTADOR
        print('\033[31m', end=' ')                                                      # "total" VAI RECEBER +1, E O NÚMERO LIDO VAI RECEBER UMA COR
    print('{}'.format(cont), end=' ')                                                   # QUE NESTE EXEMPLO FOI '[32M' QUE É IGUAL A COR VERDE, SENÃO
print('\n\033[mO número {} foi divisível {} vezes'.format(num, total))                  # O NÚMERO LIDO VAI RECEBER A COR '[31M' QUE É VERMELHA.
if total == 2:                                                                          # SAINDO DO LAÇO "for" VAI SER PRINTADO NA TELA QUE O NÚMERO
    print('E por isso ele é PRIMO')                                                     # 'num' DIGITADO FOI DIVISÍVEL 'total' VEZES.
else:                                                                                   # ABRE UMA CONDICIONAL 'if' PARA VERIFICAR SE 'totaL' == 2.
    print('E por isso ele NÃO É PRIMO')                                                 # SE FOR, SABEMOS QUE ESTE NÚMERO É PRIMO. CASO SEJA FALSO, O
                                                                                        # NÚMERO NÃO É PRIMO.