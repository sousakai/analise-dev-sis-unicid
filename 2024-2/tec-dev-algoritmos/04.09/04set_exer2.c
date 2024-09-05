/******************************************************************************
Aula 04/09/2024
Técnicas de Desenvolvimento de Algoritmos
Prof.º  CLÓVIS

Exercício: Criar um código que lê o salário atual de um funcionário, o seu reajuste em percentual e o informe para o usuário.
*******************************************************************************/
#include <stdio.h>
    void main() {
        float salAtual, salNovo, reajuste;
        printf("Digite seu salário atual:\n");
        scanf("%f", &salAtual);
        printf("Digite o seu reajuste (em percentual):\n");
        scanf("%f", &reajuste);
        salNovo = salAtual + salAtual * (reajuste / 100);
        printf("Seu salário inicial de R$%.2f sofreu um reajuste de R$%.2f por cento, passando a valer R$%.2f", salAtual, reajuste, salNovo);
    }