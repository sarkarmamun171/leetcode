<?php 
class bankAccount{
	private $accountNumber;
	private $balance;

	public function __construct($accountNumber,$balance){
		$this->accountNumber = $accountNumber;
		$this->balance =0;
	}
	public function getAccountNumber(){
		return $this->accountNumber;
	}
	public function getbalance(){
		return $this->balance;
	}
	public function deposit($amount){
		$this->balance+ = $amount;
		echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance</br>";
	}
	public function withdraw($amount){
		if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance</br>";
        }
        else
        {
           echo "Want to withdrawn $amount?</br>";
           echo "Insufficient balance in account $this->accountNumber. Current balance: $this->balance</br>";
        }
	}

}
$account = new bankAccount("mk-1585");
echo "Account Number:".$amount->getAccountNumber().</br>;
echo "Initial Balance: " . $account->getBalance() . "</br>";

$account->deposit(1000);
$account->withdraw(600);
$account->withdraw(700);
?>