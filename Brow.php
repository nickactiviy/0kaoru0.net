//menampilkan jenis web browser pengunjung

function get_client_browser() {

    $browser = '';

    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))

        $browser = 'Netscape';

    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))

        $browser = 'Firefox';

    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))

        $browser = 'Chrome';

    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))

        $browser = 'Opera';

    else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))

        $browser = 'Internet Explorer';

    else

        $browser = 'Other';

    return $browser;

}
