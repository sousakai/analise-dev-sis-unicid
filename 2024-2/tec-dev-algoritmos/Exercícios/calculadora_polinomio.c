/*
TÉCNICAS DE DESENVOLVIMENTO DE ALGORITMOS
UNIVERISDADE CIDADE DE SÃO PAULO
KAYKE GONÇALVES DE SOUSA

Elaborar uma aplicação console que leia os valores de A e B, sendo diferentes
de 0. Calcule e exiba o valor do polinÃ´mio , seguindo a
regra abaixo:

a**2+2.a.b+b**2+c.a.c

A > 0 e B > 0 então C = 30
A > 0 e B < 0 então C = 0
A < 0 e B > 0 então C = -1
A < 0 e B < 0 então C = (A)*(B)*(-1) */
#include <stdio.h>
#include <math.h>

int main () {
    float a, b, c;
    float resultado;
    
    printf("Digite o valor de A: \n");
    scanf("%f", &a);
    printf("Digite o valor de B: \n");
    scanf("%f", &b);
    if(a > 0 && b > 0){
        c = 30;
    }
    else if( a > 0 && b < 0 ){
        c = 0;
    } else if(a < 0 && b > 0) {
        c = -1;
    } else {
        c = a * b * -1;
    }
    
    resultado = pow(a, 2) + 2 * a * b + pow(b, 2) + c * a * c;
    printf("%f", resultado);
    return 0;
}