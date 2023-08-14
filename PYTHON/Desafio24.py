cid = input('Digite o nome da cidade onde você nasceu: ').strip() # usa-se o método strip para retirar os espaços vazios antes e depois da frase
print(cid[:5].upper() == 'SANTO') # como a palavra 'santo' possui 5 letras, então foi utilizada a funcionalidade ":5" que vai
                                  # pegar da posição 0 até a posição 6 da frase e verificar se existe a palavra 'santo'. Caso
                                  # exista, o programa vai retornar 'True'.