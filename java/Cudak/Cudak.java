package Cudak;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.Scanner;

/**
 * Created by davidyu on 2017-04-23.
 */
public class Cudak {

    private int[] getIntervall(String s){
        String[] splitString = s.split(" ");
        int[] numbers = new int[2];
        for (int i=0; i < splitString.length; i++) {
            numbers[i] = Integer.parseInt(splitString[i]);
        }
        return numbers;
    }

    private int getAmount(String s){
        int[] numbers = getIntervall(s);
        int S = numbers[2];
        
        for(int i = numbers[0]; i < numbers[1]; i++) {
            String[] nums = Integer.toString(numbers[i]).split("");

        }
        return 0;
    }
    private int getSmallest(String s) {

        return 0;
    }

    public void getAnswer(String inputString) {
        System.out.println(getSmallest(inputString));
        System.out.println(getAmount(inputString));
    }

    public static void main(String[] args) {
        Scanner sc = null;
        BufferedReader br = null;
        FileReader fr = null;
        InputStreamReader isr = null;
        String FILENAME = null;
        String extractedString = null;

        try {
            sc = new Scanner(System.in);
            FILENAME = sc.next();
            fr = new FileReader(FILENAME);
            br = new BufferedReader(fr);
            String sCurrentLine;
            br = new BufferedReader(new FileReader(FILENAME));

            while((sCurrentLine = br.readLine()) != null) {
                System.out.println(sCurrentLine);
                extractedString = sCurrentLine;
            }
        } catch (IOException e){
            e.printStackTrace();
        } finally {
            try {
                if(br != null) {
                    br.close();
                }
                if(fr != null) {
                    fr.close();
                }
            } catch (IOException e){
                e.printStackTrace();
            }
        }
        System.out.println(extractedString);
    }
}
