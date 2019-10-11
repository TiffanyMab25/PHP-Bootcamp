#!/usr/bin/php
<?php
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    ssap.php                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmabunda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 14:32:27 by tmabunda          #+#    #+#              #
#    Updated: 2019/10/11 14:32:27 by tmabunda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

$i = 1;
$str = "";
while($i < $argc)
{
    $str = $str." ".$argv[$i];
    $i++;
}
$words = preg_split('/\s+/', trim($str));
sort($words);
foreach($words as $word)
{
    echo($word);
    echo("\n");

}

?>
 