import emoji
from time import sleep
for n in range (10, -1, -1):
    print(n)
    sleep(0.5)
print(emoji.emojize('FELIZ ANO NOVO! :bottle_with_popping_cork:', use_aliases=True))