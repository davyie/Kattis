#include <iostream>
#include <vector>
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
int main()
{
    int upper, lower, digitsum;
    cin >> lower;
    cin >> upper;
    cin >> digitsum;
    int currentLow, currentHigh, digit1, digit2;
    for(int i = lower; i < upper; i++)
    {
       currentLow = sum(i);
       digit1 = i;
      if(currentLow == digitsum)
      {
          break;
      } 
    }

    for(int j = upper; j > lower; j--)
    { 
       currentHigh = sum(j);
       digit2 = j;
       if(currentHigh == digitsum)
       {
           break;
       }
    }
    std::cout << digit1 << std::endl; 
    std::cout << digit2 << std::endl;
}
