#include <stdio.h>
#include "encrypt.h"
#include "checksum.h"

int main() {
    char s[] = "Skaji drug i prohodi";
    encrypt(s);
    printf("Zashifrovano v: '%s'\n", s);
    printf("Kontrolnaya cymma %i\n", checksum (s));
    return 0;
}