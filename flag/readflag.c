#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[]) {
    seteuid(0);
    setegid(0);
    setuid(0);
    setgid(0);
    
    if(argc < 5) {
        printf("maybe try a little harder?\n");
        return 1;
    }

    if ((strcmp(argv[1], "i") | strcmp(argv[2], "want") | strcmp(argv[3], "a") | strcmp(argv[4], "flag")) != 0) {
        puts("nuh uh uh, you didn't say the magic word!");
        return 1;
    }

    char flag[256] = { 0 };
    FILE* fp = fopen("/flag", "r");
    if (!fp) {
        perror("fopen");
        return 1;
    }
    if (fread(flag, 1, 256, fp) < 0) {
        perror("fread");
        return 1;
    }
    puts(flag);
    fclose(fp);
    return 0;
}
