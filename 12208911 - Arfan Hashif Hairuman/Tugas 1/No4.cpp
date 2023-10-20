#include <iostream>
#include <string>

using namespace std;

int main() {
    int sj, d, j, m, td;

    cout << "Masukan total detik ";
    cin >> td;

    sj = td % 3600;
    d = sj % 60;
    m = (sj - d) / 60;
    j = (td - sj) / 3600;
    
    cout << j << " Jam " << m << " Menit " << d << " Detik ";
}