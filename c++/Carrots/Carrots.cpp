#include <iostream>
#include <fstream>
#include <string>

using namespace std;

int main() 
{
    std::string filename, word;
    cin >> filename;
    std::ifstream infile(filename);
    int contestants = 0, problems = 0;
    infile >> contestants >> problems; 
    std::cout << problems << std::endl;
    // Return type of the main function.
}   
