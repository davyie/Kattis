package MeanProblem;

import java.util.Scanner;

/**
 * Created by davidyu on 2017-04-16.
 */
public class mean {

    public int solve(String problem){
        String[] nums = problem.split(" ");
        int R1, R2, S = 0;

        R1 = Integer.parseInt(nums[0]);
        S = Integer.parseInt(nums[1]);
        return R2=2*S-R1;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        mean m = new mean();
        System.out.println(m.solve(sc.nextLine()));
    }
}
