texto = 'DE ACORDO COM A FORMA DE PAGAMENTO ESCOLHIDA,\n O VALOR A PAGAR É DE R$'
print('###' * 15)
print('\033[34m        SISTEMA DE PAGAMENTO - SISPAG \033[m')
print('###' * 15)
vlr = float(input('\033[33m DIGITE O VALOR DO PRODUTO: \033[m'))
print('###' * 15)
print('     \033[34m   ESCOLHA A FORMA DE PAGAMENTO \033[m \n\n'
                ' [ 1 ] À VISTA (DINHEIRO / CHEQUE) \n '
                '[ 2 ] À VISTA NO CARTÃO \n '
                '[ 3 ] 2x NO CARTÃO \n '
                '[ 4 ] 3X OU MAIS NO CARTÃO ')
print(' ')
condpag = int(input('DIGITE A FORMA DE PAGAMENTO ESCOLHIDA: '))
print('###' * 15)
if condpag == 1:
    vf = vlr * 0.9
    print('\033[1;32m {}{:.2f} \033[m'.format(texto, vf))
elif condpag == 2:
    vf = vlr * 0.95
    print('\033[1;32m {}{:.2f} \033[m'.format(texto, vf))
elif condpag == 3:
    print('\033[1;32m {}{:.2f} \033[m'.format(texto, vlr))
else:
    vf = vlr * 1.2
    print('\033[1;32m {}{:.2f} \033[m'.format(texto, vf))

print('###' * 15)