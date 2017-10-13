package timeloop;
import java.util.*;
import java.io.*;

public class main{
    public static void main(String[] args) {
          Scanner inFile = new Scanner(System.in);
          timeloop time = new timeloop();
          time.loop(inFile.nextInt());
    }
}
class timeloop{
  public void loop(int times){
    for(int i = 1; i <= times; i++) {
        System.out.println(i + " Abracadabra");
    }
  }
}
