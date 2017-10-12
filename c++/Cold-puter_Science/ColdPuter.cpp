#include <stdio.h>
#include <iostream>

using namespace std;

int main()
{
    int days;
    int coldDays;
    int numberOfColdDays = 0;
    cin >> days;
    for(int i = 0; i < days; i++) {
        cin >> coldDays;
        if(coldDays < 0)
        {
            numberOfColdDays++;
        }
    }
    cout << numberOfColdDays << endl;
    return 0;
}
