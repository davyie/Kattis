#include <stdio.h>
#include <iostream>
using namespace std;
int main()
{
    int data; 
    int months;
    int dataEachMonth; 
    int sum = 0;
    cin >> data >> months;
    for(int i = 0; i < months; i++)
    {
        cin >> dataEachMonth;
        sum = sum + (data - dataEachMonth);
    }
    sum = sum + data;
    cout << sum << std::endl;
}
