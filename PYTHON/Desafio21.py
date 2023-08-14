import pygame # pygame é uma biblioteca popular utilizada para manipulação de mídia no Python.
pygame.mixer.init() # este comando faz chamar o método mixer
pygame.init() # este comando inicializa o método
pygame.mixer.music.load('Desafio21.mp3') # este comando carrega o arquivo de mídia no container
pygame.mixer.music.play(loops=0, start=0.0) #este comando executa o arquivo. utilizado o método 'loops=0' para que o arquivo seja
                                            # executado só uma vez, e o 'start' para iniciar a execução imediatamente.
pygame.event.wait() # este comando utiliza o método 'wait' para esperar o próximo comando do usuário ao terminar a execução do arquivo
                    # de mídia.


###############################################################
# IMPORTANTE DE LEMBRAR QUE TEM QUE DEIXAR O ARQUIVO DE MÍDIA #
# DENTRO DO MESMO LOCAL ONDE ESTÁ O CÓDIGO PARA QUE SEJA MAIS #
# FÁCIL A ADMINISRAÇÃO E MANUTENÇÃO DO MESMO.                 #
###############################################################