<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ systemsettings('system_page_title') ?: config('app.name', 'LinkAce') }}</title>

@if(usersettings('darkmode_setting') === '1')
    <link href="{{ mix('assets/dist/css/app-dark.css') }}" rel="stylesheet">
@elseif(usersettings('darkmode_setting') === '2')
    <style type="text/css"><?php include public_path('assets/dist/css/loader.css') ?></style>
    <meta name="darkmode" content="1">
    <link rel="stylesheet"
        data-light-href="{{ mix('assets/dist/css/app.css') }}"
        data-dark-href="{{ mix('assets/dist/css/app-dark.css') }}">
@else
    <link href="{{ mix('assets/dist/css/app.css') }}" rel="stylesheet">
@endif

<script defer src="{{ mix('assets/dist/js/dependencies.js') }}"></script>
<script defer src="{{ mix('assets/dist/js/app.js') }}"></script>
<script defer src="{{ mix('assets/dist/js/fontawesome.js') }}"></script>

<meta property="la-app-data" content="{{ json_encode([
    'user' => [
        'token' => csrf_token(),
    ],
    'routes' => [
        'ajax' => [
            'searchLists' => route('ajax-lists'),
            'searchTags' => route('ajax-tags'),
            'existingLinks' => route('ajax-existing-links'),
            'generateApiToken' => route('generate-api-token'),
            'generateCronToken' => route('generate-cron-token'),
        ]
    ]
]) }}">

@include('partials.favicon')
