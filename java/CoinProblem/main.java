public class main {

    public static int[] coins = {1,2};

    public static void main(String[] args) {
        System.out.println(combinations(4, 0));
    }

    public static int combinations( int amount, int currentCoin ) {
        
        if( amount == 0 )
            return 1;
        if( amount < 0 ) 
            return 0;
        int combos = 0;
        for(int coin = currentCoin; coin < coins.length; coin++) {
            combos += combinations(amount - coins[coin], coin);
        }
        return combos;
    }
}
