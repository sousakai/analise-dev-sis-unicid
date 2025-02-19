import java.util.Scanner;
/*
*
* ATIVIDADE 04 - Lista 1; Caderno de Exercícios
*
* 4.  Crie um programa que receba quatro valores quaisquer e mostre a média e soma entre eles.
*/
public class Atividade04_L1{
    public static void main(String args[]){
        float v1, v2, v3, v4 = 0;

        Scanner sc = new Scanner(System.in);

        System.out.println("Digite o primeiro valor:");
        v1 = sc.nextFloat();

        System.out.println("Digite o segundo valor:");
        v2 = sc.nextFloat();

        System.out.println("Digite o terceiro valor:");
        v3 = sc.nextFloat();

        System.out.println("Digite o quarto valor:");
        v4 = sc.nextFloat();

        float soma = v1 + v2 + v3 + v4;
        float media = (v1+v2+v3+v4) / 4;
        
        System.out.println("A soma entre os números é de: " + soma + ".\nA média entre os números é de: " + media);
    }
}

