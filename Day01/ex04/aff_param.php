#/!usr/bin/php
<?php
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    aff_param.php                                      :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmabunda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 11:15:10 by tmabunda          #+#    #+#              #
#    Updated: 2019/10/11 11:15:10 by tmabunda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

    $i = 1;
    while ($i < $argc)
    {
        print($argv[$i]."\n");
        $i++;
	}
?>