import java.util.Scanner;
/*
*
* ATIVIDADE 01 - Lista 1; Caderno de Exercícios
*
* 1.  Crie um programa que recebe três nomes quaisquer por meio da linha de execução do programa, e os imprima na tela da seguinte maneira: o primeiro e o último nome serão impressos na primeira linha um após o outro, o outro nome
(segundo) será impresso na segunda linha.
*/

public class Atividade01_L1{
    public static void main(String args[]){

        Scanner sc = new Scanner(System.in);
        
        System.out.println("Digite o primeiro nome");
        String nome1 = sc.nextLine();

        System.out.println("Digite o segundo nome");
        String nome2 = sc.nextLine();

        System.out.println("Digite o terceiro nome");
        String nome3 = sc.nextLine();

        System.out.println(nome1 +"-" + nome3);
        System.out.println(nome2);
    }
}