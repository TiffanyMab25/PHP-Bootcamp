#!/usr/bin/php
<?php
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    another_world.php                                  :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmabunda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/12 13:10:49 by tmabunda          #+#    #+#              #
#    Updated: 2019/10/12 13:10:49 by tmabunda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #
function my_cleaner($str)
  	{
    	$temp = trim($str);
    	$res = preg_replace('/(\s+)|(\t+)/', ' ', $temp);
    	return $res;
	 }
	if ($argc > 1)
		echo my_clean($argv[1])."\n";
?>
