
import java.util.Scanner;

/*
*
* ATIVIDADE 05 - Lista 3; Caderno de Exercícios
*
* 5. O fatorial de um número inteiro não negativo n é escrito como n!(pronuncia-se
fatorial de n) e é definido como segue:
n! = n.(n-1) . (n-2). ....1 (para valores de n maiores que ou iguais a 1)
e
n! =1(para n=0)
Por exemplo: 5! = 5.4.3.2.1, o que dá 120.
*/
public class Atividade05_L3 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.println("Digite o número a ser calculado o fatorial:");
        int numero = sc.nextInt();

        int fatorial = 1;

        for (int i = 1; i <= numero; i++) { // variável i iniciada em 1, para evitar que a multiplicação seja feita por
                                            // 0 e prejudique a conta.

            fatorial *= i;
            // fatorial é igual a fatorial * i.
            // Dessa forma, o i vai de 1 até o número inserido (de 1 a 9, por exemplo). E
            // sempre o fatorial vai guardar o valor de i (inicialmente 1x1) e multiplicar o
            // resultado pelo próximo número.

            // 1x1=1; 1x2=2; 2x3=6... e por diante.
        }

        System.out.println("Resultado:");
        System.out.println(fatorial);

    }
}
