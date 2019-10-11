#!/usr/bin/php
<?php
# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    rostring.php                                       :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: tmabunda <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/10/11 14:47:53 by tmabunda          #+#    #+#              #
#    Updated: 2019/10/11 14:47:53 by tmabunda         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

$argv[1] = trim($argv[1]);
$fststr = substr($argv[1], 0, strpos($argv[1], " "));
$sndstr = substr($argv[1], strlen($fststr), strlen($argv[1]) - strlen($fststr));
$final = trim(preg_replace("/[\s]+/"," ", $sndstr.' '. $fststr));
echo $final."\n";

?>
