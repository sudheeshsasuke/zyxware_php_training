#include <math.h>
#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <assert.h>
#include <limits.h>
#include <stdbool.h>

//HackerRank problems

int main(){
    int n; 
    int m; 
    scanf("%d %d",&n,&m);
    int result = ((n+1) / 2) * ((m+1) / 2);
    printf("%d", result);
    return 0;
}

