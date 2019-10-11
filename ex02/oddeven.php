#!/usr/bin/php
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

while(1) /*while its true. It will alwaus coninue */
{
    echo  "Enter a number: ";
    $content = fopen('php://stdin', 'r');
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
        else if(feof($content)){
            echo "^D\n"; /*terminates the program */
            break;
        }
        else
        {
            echo " '$number' is not a number\n";
        }
}
?>