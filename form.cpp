#include <iostream>
#include <string>
using namespace std;
int main() {
char user[7];
bool valid;
cout << "Masukkan username sesuai ketentuan :" << endl;
cout << "dengan format lima karakter pertama huruf dilanjutkan underscore dan dilanjutkan dua buah angka";
cout << endl << "contoh valid username : lkjhg_99" << endl;
cout << "Masukan username anda : ";
cin >> user;

//mengecek 5 huruf pertama
for (int a=0;a<=4;a++) {
	if (user[a] >= 'a' && user[a] <= 'z') valid = true;
	else valid = 0;
	//mengecek harus menggunakan _
		for (int b=5;b<=5;b++) {
			if (user[b] == '_') valid = true;
			else valid = 0;
			}
			//mengecek harus digit / angka	
				for (int c=6;c<=7;c++) {
				if (isdigit(user[c])) valid = true;
				else valid = 0;
				}
	}
if (valid){
	cout << user<< valid dan bisa di pakai;
	}
else{
	cout << "username tidak valid, coba lagi";
	}
}
