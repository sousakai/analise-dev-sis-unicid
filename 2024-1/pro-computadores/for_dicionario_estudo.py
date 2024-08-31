reunioes = {}
#Cria um dicionario vazio.

num_reunioes = int(input("Quantas reuniões serão?\n"))
#Estabelece quantas vezes o loop se repetirá, atraves da variavel num_reunioes.

for x in range(1, num_reunioes + 1):
#Estabelece que o loop se inicia no 1, e vai até o num_reunioes. O +1 garante que não haja cortes (o range sempre pega o número anterior ao dito. Exemplo: range(1, 20) retornará final 19. O +1 garante que isso não acontecerá.)

    responsavel_reuniao = input("Quem é reponsável pela reunião?\n")
#Cria um nome que será a chave pro valor.

    num_pessoas = int(input("Quantos participantes?\n"))
#Cria o valor, anexado a chave.

    reunioes[responsavel_reuniao] = num_pessoas
#dicionario[Chave] = valor. Isso faz com que ao digitar a chave (responsavel_reuniao), ele encontre o valor anexado com facilidade.

for responsavel, participantes in reunioes.items():
#O .items() faz o código conferir as listas, para saber quantos valores há. Assim, cada chave-valor se torna temporariamente uma tupla para a função .items(). Isso não é permanente, e continuará sendo um dicionário.


    if participantes < 5:
      print(f"A reunião de {responsavel} possui {participantes} pessoas. PRIORIDADE BAIXA.")
    else:
        print(f"A reunião de {responsavel} possui mais de 5 pessoas. - PRIORIDADE ALTA.")

#Estabelece funções simples para checar valores. "responsavel" foi a variavel definifa em "for responsavel, participantes". A chave recebe esse valor, e ao usar .format ele automaticamente preenche com os valores relacionados. Assim, o código exibirá o nome do responsável (chave; responsavel) e o número de participantes (valor; participantes).