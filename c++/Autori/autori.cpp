#include <iostream>
#include <string>
#include <vector>

using namespace std;

const vector<string> explode(const string& s, const char& c)
{
	string buff{""};
	vector<string> v;
    
	for(auto n:s)
	{
		if(n != c) buff+=n; else
		if(n == c && buff != "") { v.push_back(buff); buff = ""; }
	}
	if(buff != "") v.push_back(buff);

	return v;
}

int main()
{
    string name;
    cin >> name; 
    vector<string> words;
   size_t pos = 0; 
    string delimiter = "-";
    words.push_back(name.substr(0, name.find("-")));
    vector<string> v{explode(name, '-')};
    std::string autori;
    for(auto n:v)
    {
        autori.append(n.substr(0, 1));
    }
    std::cout << autori << std::endl;
}
