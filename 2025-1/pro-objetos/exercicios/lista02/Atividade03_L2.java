/*
* ATIVIDADE 03 - Lista 2; Caderno de Exercícios
*
* 3. Faça um aplicativo que calcule o produto dos inteiros ímpares de 1 a 15 e exiba o resultado na tela
*/
public class Atividade03_L2{
    public static void main(String[] args){
        
        int soma = 0;

        for(int i = 1; i <=15; i+=2){
            soma += i;
        }

        System.out.println("A soma dos números ímpares é de: " + soma);
    }
}

