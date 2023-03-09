<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('/dist/css/tabler.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{ asset('/dist/css/tabler-flags.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{ asset('/dist/css/tabler-payments.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{ asset('/dist/css/tabler-vendors.min.css?1668287865')}}" rel="stylesheet"/>
    <link href="{{ asset('/dist/css/demo.min.css?1668287865')}}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
    @stack('extra-styles');
  </head>
