<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:flex-left sm:justify-between py-2 px-6 bg-white">
	        <div class="mb-2 sm:mb-0 inner">
		        <a href="{{ route('home')}}" class="text-2xl no-underline text-grey-darknest hover:text-blue-dark font-sans font-bold">Laravel</a>
		        <span class="text-xs text-grey-dark">Парсинг погоды</span>
	        </div>
	
	        <div class="sm:mb-0 self-center">
                @auth('web')
                    <a href="{{ route('logout') }} " class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
                @endauth

                @guest('web')
                    <a href="{{ route('login') }} " class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
                @endguest
                    <a href="{{ route('review_form') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Оставить отзыв</a>
                @auth('web')
                    <a href="{{ route('reviews') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Просмотреть отзывы</a>
                    <a href="{{ route('parsing') }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Погода Запорожье</a>
                @endauth
	        </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </body>
</html>
