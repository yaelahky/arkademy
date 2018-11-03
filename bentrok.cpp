#include <iostream>
using namespace std;
int isBentrok(int x, int y);
int main() {
	//deklarasi
	int x,y,z;
		cout << "Masukan hari pertama : ";
		cin >> x;
		cout << "Masukan hari kedua : ";
		cin >> y;
			//masukkan ke x y seperti kpk
			z = isBentrok(x,y);
			cout << z;
	}
	//deklarasi lagi
int isBentrok(int x, int y){
	int lebihbesar;
	int kpk;
	// menghitung apakah x lebih besar dari y dan di masukkan variable lebihbesar
	if (x > y)
		lebihbesar = x;
	else 
		lebihbesar = y;
	// jika benar menghitung lebih besar di modulus x dan y inputan awal 
	while (true){
   if((lebihbesar % x == 0) and (lebihbesar % y == 0))
   {
   	// true 0
       kpk = lebihbesar;
       break;
   }
   // loop karena /= 0
   lebihbesar++;
}
	return kpk;
	}
