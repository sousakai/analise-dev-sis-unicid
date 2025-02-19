/*
* ATIVIDADE 02 - Lista 2; Caderno de Exercícios
*
* 2. Faça um programa que apresente o total da soma dos cem primeiros números inteiros (1+2+3+.....+99+100).
*/

public class Atividade02_L2{
    public static void main(String[] args){
        int i, soma = 0;
        
        for(i = 0; i<=100; i++){
        	soma+= i;
        }
        System.out.println("A soma dos cem primeiros números inteiros: " + soma);
        
    }   
}