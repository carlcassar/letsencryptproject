@extends('app')

@section('content')
<div class="container">
    <h1>About</h1>
    <p>This website was created as part of Masters Project investigating the <a href="https://letsencrypt.org">Let's Encrypt Certification Authority</a>. It's sole purpose is to be the front end to a server on which the <a href="https://github.com/letsencrypt/letsencrypt">Let's Encrypt Client</a> has been used to test the acquisition and installation of SSL Certificates provided by Let's Encrypt.</p>

    <p>The <a href="\">landing</a> page shows a video of the acquisition and installation process. The site also links to <a href="https://www.ssllabs.com/ssltest/analyze.html?d={{ url()->current() }}">Qualys SSL Labs</a> where you can run a test on the SSL certificate for this site and review the security of the certificates issued by Let's Encrypt.</p>
</div>
@stop
