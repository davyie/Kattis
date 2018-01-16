#include <iostream>
#include <stdio.h>

using namespace std;

int main()
{
    long line, secondline, result;
    while(cin >> line) 
    {
       cin >> secondline;
       result = line - secondline; 
       if(result < 0)
           result = result * -1;
       cout << result << endl;
    }
}
