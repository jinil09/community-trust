<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Development Trust</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="">

    @include('components.navbar')

    <main class="">
        @include('components.hero')
        @include('components.volunteer-section')
        @include('components.initiatives-tabs')
        <!-- @yield('content') -->
    </main>

    @include('components.footer')

</body>
</html>
