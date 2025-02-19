// importa a biblioteca (como o include em linguagem C)
import java.util.Scanner;

public class App1{
	public static void main(String args[]){
		// criação do objeto da classe Scanner (input de dados)
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Digite o primeiro nome:");
		String nome1 = sc.nextLine();
		
		System.out.println("Digite o segundo nome:");
		String nome2 = sc.nextLine();
		
		System.out.println("Digite o terceiro nome:");
		String nome3 = sc.nextLine();
		
		System.out.println(nome1+" - "+nome3);
		System.out.println(nome2);
	}
}