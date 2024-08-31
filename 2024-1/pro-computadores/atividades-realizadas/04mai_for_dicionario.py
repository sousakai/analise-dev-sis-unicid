senhas = {}
numero_usuarios = int(input("Digite o número de usuários: "))

for x in range(1, numero_usuarios + 1):
    nome_usuario = input("Digite qual o usuário correspondente: ")
    senha = input("Por favor, " + nome_usuario + ", digite sua senha: ")
    senhas[nome_usuario] = senha

for usuario, senha in senhas.items():
    if len(senha) < 6:
        print("A senha para", usuario, "é fraca.")
    elif len(senha) >= 6 and len(senha) <= 8:
        print("A senha para", usuario, "é de força média.")
    else:
        print("A senha para", usuario, "é forte.")
