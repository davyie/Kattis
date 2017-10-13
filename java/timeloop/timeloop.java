import java.util.*;
import java.io.*;
public class timeloop{

  public void loop(int times){
    for(int i = 1; i <= times; i++) {
        System.out.println(i + " Abracadabra");
    }
  }

  public static void main(String[]args) {
    timeloop tl = new timeloop();
    Scanner scanner = new Scanner(System.in);
    InputStream cin;
    InputStreamReader isr;
    BufferedReader br;

    try{
      cin = new FileInputStream(scanner.nextLine());
      isr = new InputStreamReader(cin);
      br = new BufferedReader(isr);
    }catch(FileNotFoundException e){
      System.out.println("File not found");
      return;
    }

    int size;
    String test;
    try{
      size = Integer.parseInt(br.readLine());
      test = br.readLine();
    }catch(IOException e) {
      System.out.println("No more lines is found.");
      return;
    }

    tl.loop(size);
  }
}
