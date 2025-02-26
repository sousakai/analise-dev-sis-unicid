import java.util.Scanner;

/*
*
* ATIVIDADE 04 - Lista 3; Caderno de Exercícios
*
* 4. Uma empresa quer transmitir dados por telefone, mas está preocupada com a
possibilidade de seus telefones estarem grampeados. Todos seus dados são
transmitidos como inteiros de quatro dígitos. Eles pedem para você escrever um
programa que criptografará seus dados de modo que estes possam ser
transmitidos mais seguramente. Seu aplicativo deve ler um inteiro de quatro
dígitos inserido pelo usuário na linha de comando e criptografá-lo como segue:
substitua cada digito por (a soma deste dígito mais 1). Então troque o primeiro
digito pelo terceiro e troque o segundo pelo quarto. A seguir imprima o inteiro
criptografado. Escreva um aplicativo separado que recebe como entrada um
inteiro de quatro dígitos criptografado e o descriptografa para formar o número
original
*/
public class Atividade04_L3 {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.println("Digite um número de 4 dígitos:");
        int numeroInt = sc.nextInt();

        int numeroAdicionadoUm = numeroInt + 1111;
        // Adiciona 1111 para obter o efeito de +1 em cada dígito. Não funciona com o
        // número 9999.

        String numeroStr = Integer.toString(numeroAdicionadoUm);
        // Transforma o numero em string para facilitar a manipulação por índice.

        String numeroCriptografado = trocarPosicao(numeroStr);

        System.out.println("Número Criptografado:");
        System.out.println(numeroCriptografado);

        System.out.println("Número Original:");
        System.out.println(descriptografar(numeroCriptografado));
    }

    public static String trocarPosicao(String numeroStr) {
        char pos1 = numeroStr.charAt(0);
        char pos2 = numeroStr.charAt(1);
        char pos3 = numeroStr.charAt(2);
        char pos4 = numeroStr.charAt(3);

        String numeroCriptografado = "" + pos3 + pos4 + pos1 + pos2;

        return numeroCriptografado;

        // Uitiliza o charAt para ler o índice das posições. Depois, concatena tudo a
        // uma string vazia, pois não permite unir char a String diretamente.

    }

    public static int descriptografar(String numeroCriptografado) {
        char pos1 = numeroCriptografado.charAt(0);
        char pos2 = numeroCriptografado.charAt(1);
        char pos3 = numeroCriptografado.charAt(2);
        char pos4 = numeroCriptografado.charAt(3);

        String numeroDescriptografado = "" + pos3 + pos4 + pos1 + pos2;
        // Utiliza a mesma lógica do método de criptografia.

        int numeroOriginal = Integer.parseInt(numeroDescriptografado) - 1111;
        // Converte o numero descriptografado para Int e depois remove o +1 por dígito
        // (1111) que foi incluído antes do método de trocar posições.

        return numeroOriginal;

    }
}
