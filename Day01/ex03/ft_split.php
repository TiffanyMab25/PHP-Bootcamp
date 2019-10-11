#!usr/bin/php
<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_split.php                                       :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: tmabunda <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/10 20:15:10 by tmabunda          #+#    #+#             */
/*   Updated: 2019/10/10 20:15:17 by tmabunda         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

function ft_split($str)
{
    $my_str = explode(" ", $str);
    $my_tab = array_filter($my_str);
    sort($mytab);
    prin $my_tab[0];
    print_r(ft_split("Hello World    AAA"));
}
?>
