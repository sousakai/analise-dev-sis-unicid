import java.util.Scanner;

/*
*
* ATIVIDADE 01 - Lista 3; Caderno de Exercícios
*
* 1.  Crie um aplicativo que receba uma frase e mostre-a de forma invertida.
*/
public class Atividade01_L3 {
    public static void main(String args[]) {
        System.out.println("Digite uma frase:");
        Scanner sc = new Scanner(System.in);
        String frase = sc.nextLine();
        String fraseInvertida = "";

        for (int i = frase.length() - 1; i >= 0; i--) { // Uso de frase.length() para medir o tamanho da string (4), e
                                                        // depois aplicando -1 para pegar o índice final. (necessário
                                                        // pois a string se inicia em 0 e não em . o método retorna o
                                                        // comprimento inteiro, e não o index. sem isso, daria erro.)

            fraseInvertida += frase.charAt(i);

            // O charAt(i) funciona como variavel[i]. basicamente transforma em um vetor.
            // Criei uma string vazia que vai armazenar os caracteres da frase, de forma
            // invertida. Poderia ser feito sem a variável, mas ficaria um caractere por
            // linha.

        }
        System.out.println(fraseInvertida);
    }
}