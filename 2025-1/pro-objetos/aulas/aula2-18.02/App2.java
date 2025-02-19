import java.util.Scanner;
/*
*
* ECLIPSE IDE
* Source >> Organize imports
* Serve para buscar e organizar as importações de bibliotecas.
* 
*/

public class App2{

	public static void main(String args[]){
        System.out.println("Digite o seu nome:");

        Scanner sc = new Scanner(System.in);
        String nome = sc.nextLine();

        System.out.println("Digite o primeiro número:");
        int num1 = sc.nextInt();

        System.out.println("Digite o segundo número:");
        int num2 = sc.nextInt();

        int media = (num1+ num2) /2;

        System.out.println("Olá " + nome + ", a média dos números é: " + media);
  
    }
}
