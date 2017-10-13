package Apaxians;

import java.util.ArrayList;
import java.util.HashSet;
import java.util.List;
import java.util.Scanner;

/**
 * Created by davidyu on 2017-04-16.
 */
public class apaxian {
    public String fix(String word){
        StringBuilder sb = new StringBuilder();
        String[] letters = word.split("");
        for(String letter : letters) {
            if(sb.toString().endsWith(letter)) {
                continue;
            } else {
              sb.append(letter);
            }
        }
        return sb.toString();
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        apaxian apa = new apaxian();
        System.out.println(apa.fix(sc.nextLine()));
    }
}
