#include <iostream> 
using namespace std;

class Queue{
    int *a, size, front, rear;
    public:
    Queue(int s){
        size = s;
        a = new int[size];
        front = -1;
        rear = -1;
    }
    
    bool isFull(){
        if((front == 0 && rear == size-1) || 
            (rear == (front-1)%(size-1)))
           return true;
        return false;
    }
    
    bool isEmpty(){
        if(front==-1)
            return true;
        return false;
    }
    void enqueue(int n){
        if(isFull())
            cout<<"OverFlow !!"<<endl;
        else{
            rear=(rear+1)%size
            a[rear] = n;
            if(front == -1)
                front++;
        }
    }
    
    int dequeue(){
        if(isEmpty()){
            cout<<"UnderFlow !!"<<endl;
            return -1;
        }
        if(front==rear){
            int x = a[rear];
            front = -1;
            rear = -1;
            return x;
        }
        else{
            int x = a[front];
            front=(front+1)%size;
            return x;
        }
    }
};
int main() 
{
    Queue Q(3);
    Q.enqueue(1);
    Q.enqueue(2);
    Q.enqueue(3);
    cout<<Q.dequeue()<<endl;
    Q.enqueue(4);
    cout<<Q.dequeue()<<endl;
    cout<<Q.dequeue()<<endl;
    cout<<Q.dequeue()<<endl;
    return 0; 
} 
