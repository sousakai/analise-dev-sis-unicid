/******************************************************************************
Aula 04/09/2024
Técnicas de Desenvolvimento de Algoritmos
Prof.º  CLÓVIS

Exercício: Criar um código capaz de ler um número e exibir seu antecessor e sucessor.
*******************************************************************************/
#include <stdio.h> 
    void main () {
        int num1 = 0;
        printf("Digite um número:\n");
        scanf("%d", &num1);
        printf("O seu número é: %d", num1);
        printf("\n O antecessor é: %d", num1 -1);
        printf("\n O sucessor é: %d", num1 + 1);
    }
    