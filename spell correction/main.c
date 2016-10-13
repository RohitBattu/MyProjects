#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>
#define ALPHABET_SIZE 26

typedef struct node
{
   bool isEndOfWord;
   struct node* next[ALPHABET_SIZE];
}Node;

Node *root;

Node* createNode()
{
   Node *n=malloc(sizeof(Node));
   int i;
   n->isEndOfWord = false;
   for(i=0;i<ALPHABET_SIZE;i++)
        n->next[i]=NULL;
   return n;
}


bool hasWord(char word[])
{
   int len=strlen(word);
   Node *temp=root;
   int i;
   for(i=0;i<=len;i++)
   {
       char c=word[i];
       int index=c-'a';
       if(i==len)
        {
              if(temp->isEndOfWord==true)
                return true;
              else
                return false;
        }
        else
        {
            if(temp->next[index]!=NULL)
              temp=temp->next[index];
            else
              return false;
        }
    }
}


void replace(char w[])
{
    char v[30];
    int j=0;
    int i=0;
    while(j<strlen(w))
    {
      char c = w[j];
      for(i=0;i<26;i++)
      {
        w[j]=i+'a';

        if(hasWord(w))
        printf("\n %s",w);

      }
      w[j]=c;
     j++;
    }

}
void insertion(char w[])
{
    int i=0;
    int j;
    char c[20];
    char v[20];
    int k;
    int f = strlen(w);
    int y;
    for(;i<=strlen(w);i++)
    {
        strcpy(c,w);
        for(j=0;j<26;j++)
        {
           c[i]=j+'a';

            y=0;
           for(k=0;k<i;k++)
           {

               v[y]=c[k];
               y++;
           }

           v[y]=c[i];

           for(y=i+1;k<=f;y++)
           {

            v[y]=w[k];
            k++;
           }
             v[k]='\0';
           if(hasWord(v))
           printf("\n %s",v);
        }
    }
}

void insertWord(char word[])
{
    int len,j;
    len = strlen(word);
    Node *temp=root;
    for(j=0;j<len;j++)
    {
        char c = word[j];
        int index = c-'a';
        if(temp->next[index]==NULL)
        {
            temp->next[index]=createNode();
        }

        temp=temp->next[index];
     }

     temp->isEndOfWord=true;
      //printf("\n word has been inserted");

}

void deletion(char word[])
{
    int len=strlen(word);
    char v[30];
    int i,j,k;
    strcpy(v,word);
    for(j=0;j<len;j++)
    {
        for(i=0;i<j;i++)
        {
            v[i]=word[i];
        }

        for(k=i+1;k<len;k++)
        {

            v[k-1]=word[k];
        }

        v[len-1]='\0';

        if(hasWord(v))
        printf("\n %s",v);
    }

}

void swap(char word[])
{
 int len=strlen(word);
 int i;
 char v[30];
 for(i=0;i<len-1;i++)
 {
     strcpy(v,word);
     char temp=v[i];
     v[i]=v[i+1];
     v[i+1]=temp;
     if(hasWord(v))
     printf("\n %s",v);
 }
}

int main()
{
    char word[30];
    char words[30];
    root = createNode();
    FILE *ptr;
    ptr=fopen("dictionary.txt","r");
    while(1)
    {
      if(feof(ptr))
      {
          break;
      }
      fscanf(ptr,"%s",words);
      insertWord(words);
    }
    fclose(ptr);
    printf("\n enter a word :");
    scanf("%s",word);
    printf("\n THE POSSIBLE SUGGESTIONS FOR YOUR WORD ARE: ");
    replace(word);
    insertion(word);
    deletion(word);
    swap(word);
       return 0;
}
