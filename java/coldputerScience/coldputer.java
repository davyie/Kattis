package coldputerScience;
import java.util.*;
import java.io.*;

/**
 * Created by davidyu on 2017-03-19.
 */
public class coldputer {
  public static void main(String[] args) {
      Scanner sc = new Scanner(System.in);
      InputStream cin;
      InputStreamReader isr;
      BufferedReader br;

      try{
        cin = new FileInputStream(sc.nextLine());
        isr = new InputStreamReader(cin);
        br = new BufferedReader(isr);
      }catch (FileNotFoundException e){
          System.out.println("File not found!");
          return;
      }

      String test;
      int size;
      String[] stringArray;

      int[] a = new int[10];
      try{
          size = Integer.parseInt(br.readLine());
          test = br.readLine();
      }catch (IOException e) {
          System.out.println("No more lines found");
          return;
      }

      int[] numArray = new int[size];
      stringArray = test.split("\\s+");

      for(int i = 0; i < stringArray.length; i++) {
          numArray[i] = Integer.parseInt(stringArray[i]);
      }

      int numOfTemps = 0;

      for(int i : numArray) {
          if(i < -1 ) {
              numOfTemps++;
          }
      }
      System.out.println(numOfTemps);
  }
}
