/*
TÉCNICAS DE DESENVOLVIMENTO DE ALGORTIMOS
UNIVERSIDADE CIDADE DE SÃO PAULO
KAYKE GONÇALVES DE SOUSA

EXERCÍCIO:
Elaborar uma aplicação console que leia dois números reais e um caractere que
representa a operação aritmética a ser realizada (+, -, *, /). O algoritmo deve
apresentar o resultado final da operação ou uma mensagem de erro para o caso
da divisão de um número por zero ou uma mensagem de erro caso não seja
escolhida uma das quatro operações aritméticas básica */
#include <stdio.h>

int main()
{
    float n1, n2, resultado;
    char operacao;
    printf("Digite o primeiro número:\n");
    scanf("%f", &n1);
    printf("Digite o segundo número:\n");
    scanf("%f", &n2);
    printf("Selecione a operação desejada (+, -, *, /):\n");
    scanf(" %c", &operacao);
    switch(operacao){
        case '+':
        resultado = n1 + n2;
        printf("O resultado de %.2f e %.2f é %.2f!", n1, n2, resultado);
        break;
        case '-':
        resultado = n1 - n2;
        printf("O resultado de %.2f - %.2f é %.2f!", n1, n2, resultado);
        break;
        case '*':
        resultado = n1 * n2;
        printf("O resultado de %.2f multiplicado por %.2f é %.2f!", n1, n2, resultado);
        break;
        case '/':
        resultado = n1 / n2;
        printf("O resultado de %.2f dividido por %.2f é %.2f!", n1, n2, resultado);
        break;
        default:
        printf("Input inválido. Escolha um operador válido (+, -, *, /)");
        break;
        
    }

    return 0;
}



