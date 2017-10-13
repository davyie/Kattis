package modulo;
import java.util.*;
import java.io.*;
public class modulo {
  public static void main(String[] args){
    Set<Integer> set = new HashSet<>();
    List<Integer> arr = new ArrayList<>();
    Random random = new Random();
    Scanner scanner = new Scanner(System.in);

    for(int j = 0; j < 10; j++) {
      arr.add(scanner.nextInt());
    }
      int[] nums = new int[]{
       42,
       84,
       126,
       252,
       420,
       42,
       84,
       126,
       252,
       840,
     };

    int diffnumber = 0;

    for(int i = 0; i < nums.length; i++) {
      if(nums[i]<42) {
        set.add(nums[i]);
        diffnumber++;
        continue;
      }
      if(!set.contains(nums[i]%42)) {
        set.add(nums[i]%42);
        diffnumber++;
      }
    }
    System.out.println(diffnumber);
  }
}
