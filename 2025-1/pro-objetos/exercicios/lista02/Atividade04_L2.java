import java.util.Random;
import java.util.Scanner;
/*
* ATIVIDADE 04 - Lista 02; Caderno de Exercícios
* 4. Crie uma classe que gere um numero aleatório entre os valores máximo e mínimo recebidos do usuário na linha de comando.
*/
public class Atividade04_L2{
    public static void main(String args[]){
        
        Scanner sc = new Scanner(System.in);
        
        System.out.println("Digite o primeiro número:");
        int min = sc.nextInt();

        System.out.println("Digite o segundo número:");
        int max = sc.nextInt();

        Random rand = new Random();

        int num = rand.nextInt(min, (max + 1));    

        System.out.println("O número sorteado foi: " +num);
    }
}