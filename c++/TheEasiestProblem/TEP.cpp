#include <iostream> 
#include <stdio.h>

using namespace std;

int countDigits(int digits)
{
    int count = 0;
    
    while(digits > 0 )
    {
        count++;
        digits = digits/10;
    }
    return count;
}

int sum(int digits)
{
    int sum = 0;
    int set = countDigits(digits);
    for(int i = 0; i < set; i++)
    {
       sum = sum + digits % 10;
       digits = digits / 10; 
    }
    return sum;
}

int main() {
    int input = 3029, result = 3029*10; 
    cout << sum(input) << endl;
    cout << sum(result) << endl;

    /*while(input != 0) {
        result = input * i;
        while(sum(input) != sum(result)) {
            result = input*i;
            i++;
        }
        cout << i << endl;
        i = 2;
        result = 0;
        cin >> input;
    }*/
}
