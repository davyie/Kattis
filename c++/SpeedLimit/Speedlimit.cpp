#include <iostream> 
#include <stdio.h>

using namespace std;

int main() {
    int loop;
    int timeBefore, timeAfter = 0;
    int miles = 0;
    int velocity;
    while (true) 
    {
        //cin >> input;
        int loop; 
        cin >> loop; 
        if(loop == -1)
            break;
        for(int i=0; i < loop; i++)
        {
            cin >> velocity;
            cin >> timeBefore;
            
            miles = miles + velocity*(timeBefore - timeAfter);  
            timeAfter = timeBefore;
        }
        cout << std::to_string(miles) + " miles"<< endl;
        timeBefore = 0;
        timeAfter = 0;
        miles = 0;
    }
}
