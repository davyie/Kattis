#include <iostream>

using namespace std;

int main() {
    int hour = 0, minute = 0;
    cin >> hour >> minute;
    if(minute > 45) { 
        minute = (minute - 45)%60;
        std::cout << hour << " " <<minute << std::endl;
    } else {
        hour = (24+(hour - 1))%24;
        minute = 60+(minute - 45);
        std::cout << hour << " " <<minute << std::endl;
    }

   
    
}
