#include <iostream>
#include <string> 

using namespace std;

int main()
{
    int denominator_1, denominator_2, upperbound;
    cin >> denominator_1 >> denominator_2 >> upperbound;

    for(int i = 1; i <= upperbound; i++)
    {
        if(i%denominator_1 == 0 && i%denominator_2 == 0){
            std::cout << "FizzBuzz" <<  std::endl;
        } else if(i%denominator_1 == 0) {
            std::cout << "Fizz" << std::endl;
        } else if(i%denominator_2 == 0){
            std::cout << "Buzz" << std::endl;
        } else {
            std::cout << i << std::endl;
        }
    }
}
