import java.util.*;

public class speedLimit{

  Scanner scanner = new Scanner(System.in);
  int[][] table;

  public speedLimit(int times) {
    table = new int[times][2];
  }

  public void count(){
    int previousTime = 0;
    int previousSpeed = 0;
    int sum = 0;
    for(int i = 0; i < table.length; i++){
      if(true)
      previousTime = table[i][1];
      previousSpeed = table[i][0];
      System.out.println("hello");
    }
  }

  public static void main(String[] args) {
    speedLimit test = new speedLimit(Integer.parseInt(args[0]));
    test.count();
  }
}
