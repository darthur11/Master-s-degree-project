<?php
//With Class
class Prime {
    public function beef_entry($current_num) {
        if(strpos(dechex($current_num),"beef")===false) {}
        else {
            return true;
        }
    }

    public function is_prime($current_num) {
        if(gmp_nextprime($current_num-1)==$current_num) {
            return true;
        }
    }

    public function print_needed_num($num_of_prime) {
        $current_num=0;
        $num_of_primes=0;
        do {
            $current_num++;
            if(self::beef_entry($current_num))
                if(self::is_prime($current_num)) {
                    $num_of_primes++;

                }
        } while($num_of_primes<$num_of_prime);
        echo $num_of_primes." prime number, whose hexadecimal representation contains \"BEEF\" is: ".$current_num."\n";
    }
}
Prime::print_needed_num(444);

/* Without class
$current_num=0;
$num_of_primes=0;
do {
    $current_num++;
    if(strpos(dechex($current_num),"beef")===false) {}
    else {
        if(gmp_nextprime($current_num-1)==$current_num) {
            $num_of_primes++;
        };


    }
} while($num_of_primes<444);

echo $num_of_primes." prime number, whose hexadecimal representation contains \"BEEF\" is: ".$current_num."\n";

*/
