/******************************************************************************
Aula 28/08/2024
Técnicas de Desenvolvimento de Algoritmos
Prof.º  CLÓVIS
EXERCÍCIO 2 - MÉDIA (INT)
*******************************************************************************/
#include <stdio.h>

void main() {
    int nota1, nota2, nota3, nota4; /* Declara as variáveis como Int. */
    nota1 = nota2 = nota3 = nota4 = 0; /* Define os valores de nota como 0.*/
    printf("Insira a primeira nota: \n");
    scanf("%d", &nota1);
    
    printf("Insira a segunda nota: \n");
    scanf("%d", &nota2);
    
    printf("Insira a terceira nota: \n");
    scanf("%d", &nota3);
    
    printf("Insira a quarta nota: \n");
    scanf("%d", &nota4);
    
    printf("A média das notas é de: %d", (nota1+nota2+nota3+nota4)/4);
    
    /*Os parênteses garantem que as notas serão somadas antes da divisão)*/ 
}