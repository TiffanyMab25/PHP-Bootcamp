#!usr/bin/php
<?php

# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    oddeven.php                                        :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmabunda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/10 12:08:19 by tmabunda          #+#    #+#              #
#    Updated: 2019/10/10 12:08:19 by tmabunda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

$content = fopen('php://stdin', 'r');
echo  "Enter a number: ";
$number = trim(fgets($content));

if(is_numeric($number))
{ 
    if($number % 2 == 0)
    { 
        echo "The number ".$number." is even\n";  
    } 
    else
    { 
        echo "The number ".$number." is odd\n";

    } 
}
    else
    {
        echo " '$number' is not a number\n";
    }


?>
