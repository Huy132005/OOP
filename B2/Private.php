<?php 
class BankAccount{
    private $balance = 0;

    private function setBalance($amount){
        $this->balance = $amount;
    }

    public function deposit($amount){
        $this->setBalance($this->balance + $amount);
    }
    public function getBalance(){
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
echo $account->getBalance();