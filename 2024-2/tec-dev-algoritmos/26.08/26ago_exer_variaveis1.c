/******************************************************************************
Aula 28/08/2024
Técnicas de Desenvolvimento de Algoritmos
Prof.º  CLÓVIS
EXERCÍCIO 1 
*******************************************************************************/
#include <stdio.h>
void main() {
    int NroDeAndares, AlturaPorAndar; 
    NroDeAndares = 0;
    AlturaPorAndar = 0;
    
    printf("Insira o número de andares do prédio:\n");
    scanf("%d",&NroDeAndares);
    /* O "&" serve para anexar o "%d", indicando que o scanf usará o parâmetro de substituição int. Ele receberá o valor do usuário. */
    
    printf("Informe a altura dos andares do prédio:\n");
    scanf("%d",&AlturaPorAndar);
    
    printf("A altura do prédio é de %d", NroDeAndares * AlturaPorAndar);
}