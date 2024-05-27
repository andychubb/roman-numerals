<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body class="font-sans antialiased h-full">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
      @inertia
    </div>
  </body>
</html>