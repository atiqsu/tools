<?php
/**
 * Created by Md. Atiqur Rahman. <atiq.cse.cu0506.su@gmail.com, atiqur@shaficonsultancy.com>
 * Date: 9/30/2019
 * Time: 4:08 PM
 */


/**
 *
 * @author Md. Atiqur Rahman <atiq.cse.cu0506.su@gmail.com, atiqur@shaficonsultancy.com>
 * @param string $started
 * @return string
 */
function getYearsOfExperience($started = '20120914') {

    $d1 = new DateTime($started);
    $d2 = new DateTime();

    $diff = $d2->diff($d1);

    if($diff->m <= 0) {

        return $diff->format("%y years!");
    }

    return $diff->format("%y years %m month(s)");
}