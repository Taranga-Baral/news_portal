<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Portal</title>
    <link rel="stylesheet" href="/assets/css/app.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])

  <link rel="stylesheet" href="/frontend/style.css">
  <link rel="stylesheet" href="/frontend/card-design.css">

</head>
<body>


    <header>

        <div class="container flex items-center justify-between my-2">

                <div>
                   <a href="/">
                    <img  class="h-[42px] md:h-[55px] lg:h-[60px]" src="{{ asset($company->logo) }}" alt="Company Logo">
                   </a>
                </div>
                <div class="text-[13px]">
                    {{ nepalidate(now()) }}
                    <img class="mx-6 my-1 h-[12px] md:h-[15px] lg:h-[20px]" src="/dhakatopi_logo/blue_line.png" alt="Line">
                </div>

        </div>

        <x-frontend-navbar/>
    </header>

    <main>

        {{ $slot }}
    </main>

    <footer></footer>
</body>
</html>
