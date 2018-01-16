#include <iostream> 
#include <fstream> 
#include <string> 

using namespace std;

int main() 
{
    std::string line, deciphedWord = "";
    while(cin >> line)
    {
        //Omit code here 
        for(int i = 0; i < line.size(); i++) 
        {
            if(line.at(i) == 'a' | line.at(i) == 'A' |line.at(i) == 'e' |line.at(i) == 'E' 
               |line.at(i) == 'o' |line.at(i) == 'O' |line.at(i) == 'i' |line.at(i) == 'I'
               |line.at(i) == 'u' | line.at(i) == 'U')
            {
                deciphedWord = deciphedWord + line.at(i); 
                i += 2;
            } else {
                deciphedWord = deciphedWord + line.at(i);
            }
        }
        deciphedWord = deciphedWord + " ";
    }
    cout << deciphedWord << endl;
}
