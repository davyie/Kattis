#include <iostream>
#include <fstream>
#include <string>
#include <stack>

using namespace std;

int main() {
    std::ifstream infile("samples/guessthedatastructure_sample.in");
    std::string message = "Datastructure decided";
    std::stack<int> gStack;
    int a = 0, b = 0, c = 0;
    while(!infile.eof()) 
    {
        // c decides how many times the for-loop will run
        infile >> c;
        for(int i = 0; i < c; i++)
        {
            // Read the file
            infile >> a >> b;
            if(a == 1) 
            {
               // Add an element to datastructure
               gStack.push(b); 
            } else {
            // Compare the elements that comes out with the elements in b 
            }
        }
        //We should print out datastructure here
        std::cout << message << std::endl;
    }    
}
