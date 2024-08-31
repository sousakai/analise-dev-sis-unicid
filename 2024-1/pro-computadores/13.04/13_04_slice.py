'''
Análise e Desenvolvimento de Sistemas - 1º F
Aula: 13/04/2024
Kayke
'''
#Função slice! Separa trechos da sua variável string, segundo posições.

texto = "Python é incrível"
slice1 = texto [1:4] #yth 
#segundo caractere (1) até o quarto.
print(slice1)

slice2 = texto [:5]
print(slice2)
#sem indicar caractere, automaticamente ele iniciará do 1º. nesse caso, até o 5º.

slice3 = texto [-5]
print(slice3)
#aqui, contará de forma contrária, por decorrência do "-"

