vlr = input('Digite algo: ')
print('O tipo primitivo desse valor é', type(vlr))
print('Só tem espaços?:', vlr.isspace())
print('É um número?:', vlr.isnumeric())
print('É alfabético?:', vlr.isalpha())
print('É alfanumérico?:', vlr.isalnum())
print('Está em maiúsculo?', vlr.isupper())
print('Está em minúsculo?:', vlr.islower())
print('Está capitalizada?:', vlr.istitle())

'''
###### OUTRA FORMA MAIS SIMPLES ###

vlr = input('Digite algo: ')
print(f'O tipo primitivo desse valor é {type(a)} \n'
      f'Só tem espaços? {a.isspace()} \n'
      f'É alfabético? {a.isalpha()} \n'
      f'É alfanumérico? {a.isalnum()} \n'
      f'Está em maiúsculas? {a.isupper()} \n'
      f'Está em minúsculas? {a.islower()} \n'
      f'Está capitalizado? {a.istitle()}')
'''