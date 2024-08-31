'''
Análise e Desenvolvimento de Sistemas - 1ºF
Programação de Computadores - 11/05/2024
Kayke Gonçalves de Sousa
'''
base = int(input("Digite a base do triângulo:"))
altura = int(input("Digite a altura do triângulo:"))
r = float(input("Digite o raio do círculo:"))

def areaCirculo(r):
    areaC = (3.14 * (r ** 2))
    return areaC

def areaTri (base, altura):
    area = (base * altura / 2) 
    return area

print (areaCirculo(r))