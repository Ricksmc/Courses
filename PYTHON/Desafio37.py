vlr = int(input('Digite um número inteiro qualquer: '))
opcao = int(input('Escolha a base de conversão que deseja (1 - BINARIO  2 - OCTAL   3 - HEXADECIMAL): '))

if opcao == 1:

    v = format(vlr, "b")
    print(f'\033[32m O valor digitado convertido em Binário é:\033[m {v}')

elif opcao == 2:

    v = oct(vlr)
    print(f'\033[32m O valor digitado convertido em em Octal é:\033[m {v}')

elif opcao == 3:

    v = hex(vlr)
    print(f'\033[32m O valor digitado convertido em Hexadecimal é:\033[m {v}')