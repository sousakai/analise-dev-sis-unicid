
tipo_problema = int(input("""Qual o seu problema que você está enfrentando?
1. Dúvidas sobre a utilização de software (não afeta o sistema).
2. Erro em determinada função do software. (sistema afetado parcialmente)
3. Sistema ou função fora do ar (impedimento ao acesso)"""))

prioridade_baixa = 1
prioridade_media = 2
prioidade_alta = 3


if tipo_problema == prioridade_baixa:
    print ("Sua prioridade de atendimento é baixa.")

elif tipo_problema == prioridade_media:
    print ("Sua prioridade de atendimento é média.")

elif tipo_problema == prioidade_alta:
    print ("Sua prioridade de atendimento é alta.")
    

