import java.util.Scanner;

/*
*
* ATIVIDADE 02 - Lista 3; Caderno de Exercícios
*
* 2. Crie um aplicativo que mostre o efeito abaixo:
J
Ja
Jav
Java
Jav
Ja
J
*/
public class Atividade02_L3 {
    public static void main(String args[]) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Digite uma palavra:");
        String frase = sc.nextLine();
        String frase_efeito = "";

        for (int i = 0; i < frase.length(); i++) { // Foi usado um loop para percorrer a string de 0 até o tamanho da
                                                   // frase (com frase.length()).

            frase_efeito += frase.charAt(i);
            // chatAt(i) retorna a posição i da string, como se fosse um vetor.

            System.out.println(frase_efeito);

        }

        for (int j = frase.length() - 1; j > 0; j--) {
            System.out.println(frase.substring(0, j));

            // Para facilitar, usamos o substring para pegar a string da posição 0 até a
            // posição j, funciona como o range do python.

        }

    }
}