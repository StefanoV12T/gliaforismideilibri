<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gli Aforismi dei Libri</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{!! asset('favicon5.ico') !!}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <x-navbar/>
    {{$slot}}  
    @include('cookie-consent::index') 
    <x-footer/>
    <script type="text/javascript">
      var _iub = _iub || [];
      _iub.csConfiguration = {"askConsentAtCookiePolicyUpdate":true,"enableTcf":true,"floatingPreferencesButtonDisplay":"bottom-right","googleAdditionalConsentMode":true,"perPurposeConsent":true,"siteId":3532394,"tcfPurposes":{"2":"consent_only","7":"consent_only","8":"consent_only","9":"consent_only","10":"consent_only","11":"consent_only"},"whitelabel":false,"cookiePolicyId":54894204,"lang":"it", "banner":{ "acceptButtonDisplay":true,"backgroundOverlay":true,"closeButtonRejects":true,"customizeButtonDisplay":true,"explicitWithdrawal":true,"listPurposes":true,"position":"bottom","showTitle":false }};
      </script>
      <script type="text/javascript" src="https://cs.iubenda.com/autoblocking/3532394.js"></script>
      <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/stub-v2.js"></script>
      <script type="text/javascript" src="//cdn.iubenda.com/cs/tcf/safe-tcf-v2.js"></script>
      <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
  </body>
</html>