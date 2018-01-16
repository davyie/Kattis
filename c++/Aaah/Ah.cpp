#include <stdio.h>
#include <iostream> 
#include <string>

using namespace std;

int main() {
    string ableToSay, doctorsWantsToHear;
    cin >> ableToSay; 
    cin >> doctorsWantsToHear;
    if(ableToSay.size() >= doctorsWantsToHear.size())
        cout << "go" << endl;
    else
        cout << "no" << endl;
}
