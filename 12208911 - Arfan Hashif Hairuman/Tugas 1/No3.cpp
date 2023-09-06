#include <iostream>
#include <string>

using namespace std;

int main() {
    int tj, tm, d, j, m;

    cout << "input jam: ";
    cin >> j;
    cout << "input menit: ";
    cin >> m;
    cout << "input detik: ";
    cin >> d;

    tj = j * 3600;
    tm = m * 60;

    cout << "total detik adalah " << tj + tm + d << endl;
}


