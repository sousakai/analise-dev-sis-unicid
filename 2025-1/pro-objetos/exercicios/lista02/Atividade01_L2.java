import java.util.Scanner;
/*
* ATIVIDADE 01 - Lista 2; Caderno de Exercícios
*
* 1. Faça um aplicativo que receba três valores inteiros na linha de comando e mostre o maior dentre eles.
*
*/
public class Atividade01_L2 {
    public static void main(String[] args) {

        Scanner sc = new Scanner(System.in);

        System.out.println("Digite o primeiro número:");
        int num1 = sc.nextInt();

        System.out.println("Digite o segundo número:");
        int num2 = sc.nextInt();

        System.out.println("Digite o terceiro número:");
        int num3 = sc.nextInt();

        /* Solução com uso de IF e Else:

        if(num1 > num2 && num1> num3){
            System.out.println("O maior número é: " + num1);
        } else if(num2 > num1 && num2 > num3){
            System.out.println("O maior número é: " + num2);
        } else {
            System.out.println("O maior número é: " + num3);
        }
        */

        /* Solução com uso de Math.max() */
        System.out.println("O maior número é: " + Math.max(num1, Math.max(num2, num3)));
    }

}
