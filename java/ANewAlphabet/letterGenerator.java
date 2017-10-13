package ANewAlphabet;
import java.util.Scanner;

/**
 * Created by davidyu on 2017-04-16.
 */
public class letterGenerator {

    StringBuilder sb = new StringBuilder();

    public String generate(String string) {
        String[] letters = string.toLowerCase().split("");
        for (String letter : letters) {
            switch (letter) {
                case "a": sb.append("@");
                    break;
                case "b": sb.append("8");
                    break;
                case "c": sb.append("(");
                    break;
                case "d": sb.append("|)");
                    break;
                case "e": sb.append("3");
                    break;
                case "f": sb.append("#");
                    break;
                case "g": sb.append("6");
                    break;
                case "h": sb.append("[-]");
                    break;
                case "i":  sb.append("|");
                    break;
                case "j": sb.append("_|");
                    break;
                case "k": sb.append("|<");
                    break;
                case "l": sb.append("1");
                    break;
                case "m": sb.append("[]\\/[]");
                    break;
                case "n": sb.append("[]\\[]");
                    break;
                case "o": sb.append("0");
                    break;
                case "p": sb.append("|D");
                    break;
                case "q": sb.append("(,)");
                    break;
                case "r": sb.append("|Z");
                    break;
                case "s": sb.append("$");
                    break;
                case "t": sb.append("']['");
                    break;
                case "u": sb.append("|_|");
                    break;
                case "v": sb.append("\\/");
                    break;
                case "w": sb.append("\\/\\/");
                    break;
                case "x": sb.append("}{");
                    break;
                case "y": sb.append("`/");
                    break;
                case "z": sb.append("2");
                break;
                default: if(letter.equals(" ")) {
                    sb.append(" ");
                } else {
                    sb.append(letter);
                };
            }
        }
        return sb.toString();
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        letterGenerator generator = new letterGenerator();
        System.out.println(generator.generate(sc.nextLine()));
    }
}
