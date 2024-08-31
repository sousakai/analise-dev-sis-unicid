'''
Análise e Desenvolvimento de Sistemas
Programação de Computadores
27/04/2024
Kayke Gonçalves de Sousa
'''
livros_desembalados = 0
livro_embalado = int(input("Insira a quantidade de livros a serem embalados."))

while livros_desembalados < livro_embalado:
    livros_desembalados += 1 
    print (livros_desembalados, "embalado")

if livros_desembalados == livro_embalado: 
    print ("Todos os", livro_embalado, "foram embalados")
    