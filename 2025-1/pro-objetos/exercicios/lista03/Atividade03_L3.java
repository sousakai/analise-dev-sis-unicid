import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Scanner;

/*
*
* ATIVIDADE 03 - Lista 3; Caderno de Exercícios
*
* 3. Crie uma classe que leia um parâmetro passado na linha de comando no
seguinte formato: dd/mm/aaaa. A saída gerada por essa execução deve ser a
impressão separada do dia, do mês e do ano - utilizando apenas os métodos da
classe String.
*/
public class Atividade03_L3 {
    public static void main(String args[]) {

        /*
         * MÉTODO 1
         * Consiste em receber a data como uma String. Ao digitar o "/", o programa vai
         * ler todos os dados até aquele caractere e separar por um índice o array de
         * String. Nesse formato, podemos separar o dia, mês e ano.
         */

        Scanner sc = new Scanner(System.in);
        System.out.println("Digite a data no formato dd/mm/aaaa: ");
        String data = sc.nextLine();

        String[] dataSeparada = data.split("/");

        String dia = dataSeparada[0];
        String mes = dataSeparada[1];
        String ano = dataSeparada[2];

        System.out.println("Método 01:");
        System.out.println("Dia: " + dia);
        System.out.println("Mês: " + mes);
        System.out.println("Ano: " + ano);

        /*
         * MÉTODO 2
         * Consiste em usar a biblioteca LocalDate e a DataTimeFormatter.
         */
        metodo2(data);
    }

    public static void metodo2(String data) {

        DateTimeFormatter formatador = DateTimeFormatter.ofPattern("dd/MM/yyyy"); // Usa o DateTimeFormatter do padrão
                                                                                  // (pattern) dd/MM/yyy. MM == mês, mm
                                                                                  // == minutos.

        LocalDate dataM2 = LocalDate.parse(data, formatador); // Criação do objeto dataM2 do tipo LocalDate, que recebe
                                                              // o valor da String data com o padrão definido no
                                                              // formatador.

        int dia2 = dataM2.getDayOfMonth(); // Coleta dia do mês;
        int mes2 = dataM2.getMonthValue(); // Coleta valor do mês;
        int ano2 = dataM2.getYear(); // coleta o ano.

        System.out.println("Método 02:");
        System.out.println("Dia: " + dia2);
        System.out.println("Mês: " + mes2);
        System.out.println("Ano: " + ano2);
    }
}
