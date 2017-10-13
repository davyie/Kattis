import java.util.*;
import java.io.*;
import java.math.*;

public class chess{
  public static void main(String[] args) {
    Scanner cin = new Scanner(System.in);
    int[] input = new int[6];
    int[] correct = new int[]{1, 1 , 2, 2, 2, 8};
    int[] output = new int[6];
    for(int i = 0; i < input.length; i++) {
      input[i] = cin.nextInt();
    }
    
    for(int j = 0; j < input.length; j++) {
      if(input[j] == correct[j]) {
        output[j] = 0;
      continue;
      }else if(input[j] < correct[j]){
        output[j] = correct[j] - input[j];
      }else {
        output[j] = correct[j] - input[j];
      }
    }

    for(int a = 0; a < output.length; a++) {
      System.out.println(output[a]);
    }
  }
}
