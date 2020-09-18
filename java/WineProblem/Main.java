public class Main {
    public static void main(String[] args) {
        int[] wines = new int[] {2, 4, 6, 2, 5};
        System.out.println(maxProfit(wines, 0, wines.length - 1, 1));
    }

    private static int maxProfit(int[] wines, int start, int end, int year) {
        if ( start == end ) {
            return wines[start] * year;
        }
        int leftProfit = wines[start] * year + maxProfit(wines, start + 1, end, year + 1);
        int rightProfit = wines[end] * year + maxProfit(wines, start, end - 1, year + 1);

        return leftProfit < rightProfit ? rightProfit : leftProfit;

    }
}
