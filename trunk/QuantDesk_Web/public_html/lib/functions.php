<?/*
 *  Copyright (C) 2010 Zigabyte Corporation. All rights reserved.
 *
 *  This file is part of QuantDesk - http://code.google.com/p/quantdesk/
 *
 *  QuantDesk is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  QuantDesk is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with QuantDesk.  If not, see <http://www.gnu.org/licenses/>.
 */?>
 <?php
/*
 * Custom implentation for StrfTime, supporting windows
 */
Function StrFTime2($Format, $TS = null) {
    If (!$TS) $TS = Time();

    $Mapping = Array(
        '%C' => sprintf("%02d", date("Y", $TS) / 100),
        '%D' => '%m/%d/%y',
        '%e' => sprintf("%' 2d", date("j", $TS)),
        '%h' => '%b',
        '%n' => "\n",
        '%r' => date("h:i:s", $TS) . " %p",
        '%R' => date("H:i", $TS),
        '%t' => "\t",
        '%T' => '%H:%M:%S',
        '%l' => '%I',
        '%u' => ($w = date("w", $TS)) ? $w : 7
    );
    $Format = Str_Replace( Array_Keys($Mapping), Array_Values($Mapping), $Format);

    Return StrFTime($Format, $TS);
}

?>