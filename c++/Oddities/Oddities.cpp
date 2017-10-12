#include <iostream>
#include <fstream>

using namespace std;

int main()
{
    //std::string filename = "";
    int element, iterations;
    cin >> iterations;
    //std::ifstream infile(filename);
    //infile >> iterations;
    for(int i = 0; i < iterations; i++) {
        cin >> element;
        if(element%2 == 0) {
            std::cout << element << " is even" << std::endl;
        } else {
            std::cout << element << " is odd" << std::endl;
        }
    }
}
