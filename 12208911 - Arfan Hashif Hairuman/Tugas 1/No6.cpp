#include <iostream>
#include <string>

using namespace std;

int main()
{
    int n[10], to, nt;

    for (int i = 0; i < 10; i++) {
        cin >> n[i-1];

        if (n[i-1] > nt) {
            nt = n[i-1];
        }
    }

    for (int i = 0; i <= 10; i++) {
        if (n[i] == nt) {
            to++;
        }
    }

    cout << "total orang: " << to << endl;
    cout << "nilai tertinggi: " << nt << endl;
}


