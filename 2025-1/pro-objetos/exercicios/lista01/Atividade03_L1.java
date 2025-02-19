import java.util.Scanner;
/*
*
* ATIVIDADE 03 - Lista 1; Caderno de Exercícios
*
* 3.  Crie um programa que receba a largura e o comprimento de um lote de terra e mostre a área total existente.
*/
public class Atividade03_L1{
    public static void main(String args[]){
        
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Digite a largura: ");
        float largura = sc.nextFloat();
        
        System.out.println("Digite o comprimento: ");
        float comprimento = sc.nextFloat();

        System.out.println("A área do lote é de: " + largura * comprimento);
    }
}