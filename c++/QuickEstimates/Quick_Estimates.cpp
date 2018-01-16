#include <iostream> 
#include <stdio.h>
#include <string>

using namespace std; 

int main() 
{
    int numOfInputs = 0;
    std::string estimate; 

    cin >> numOfInputs; 

    for(int i = 0; i < numOfInputs; i++) 
    {
        cin >> estimate; 
        cout << estimate.size() << endl;
    }
}
