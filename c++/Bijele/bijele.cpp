#include <iostream>

using namespace std;

int main()
{
    int k,q,t,kn,h,p;
    cin >> k;
    cin >> q;
    cin >> t;
    cin >> kn;
    cin >> h;
    cin >> p;
    int pieces[6];
    pieces[0] = k;
    pieces[1] = q;
    pieces[2] = t;
    pieces[3] = kn;
    pieces[4] = h;
    pieces[5] = p;

    int correctPieces[6];
    correctPieces[0] = 1;
    correctPieces[1] = 1;
    correctPieces[2] = 2;
    correctPieces[3] = 2;
    correctPieces[4] = 2;
    correctPieces[5] = 8;
    
    int need[6];

    for(int i = 0; i < sizeof(correctPieces)/sizeof(*correctPieces); i++)
    {
        if(pieces[i] < correctPieces[i])
        {
            need[i] = correctPieces[i] - pieces[i];
        } else if(pieces[i] > correctPieces[i])
        {
            need[i] = correctPieces[i] - pieces[i];
        } else 
        {
            need[i] = 0;
        }
    }
    for(int j = 0; j < sizeof(pieces)/sizeof(*pieces); j++)
    {
        std::cout << need[j] << std::endl;
    }
}
