import java.util.Scanner;
/*
*
* ATIVIDADE 01 - Lista 1; Caderno de Exercícios
*
* 2.  Faça um programa que receba a quantidade e o valor de dois produtos, no seguinte formato: quantidade1 valor1 quantidade2 valor2. O programa deve calcular esses valores seguindo a fórmula total = (quantidade1 x valor1) +
(quantidade2 x valor2). O valor total deve ser apresentado no final da execução.
*/

public class Atividade02_L1{
    public static void main(String args[]){

        Scanner sc = new Scanner(System.in);

        int quantidade1, quantidade2 = 0;
        float valor1, valor2 = 0;

        System.out.println("Digite a quantidade do primeiro produto:");
        quantidade1 = sc.nextInt();
        System.out.println("Digite o valor do primeiro produto:");
        valor1 = sc.nextFloat();

        System.out.println("Digite a quantidade do segundo produto:");
        quantidade2 = sc.nextInt();
        System.out.println("Digite o valor do segundo produto:");
        valor2 = sc.nextFloat();

        float valorFinal = (quantidade1 * valor1) + (quantidade2 * valor2);

        System.out.println("O valor final é: " + valorFinal);
    }
}