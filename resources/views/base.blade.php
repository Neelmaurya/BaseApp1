
<!DOCTYPE html>
<html>
<head>
	<title>BaseApp</title>
	 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
			*
			{
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				font-family: 'poppins';
			}

			.container
			{
				padding: 280px;
				display: flex;
				justify-content: center;
				align-items: center;
			}
			.container .box
			{
				transform-style: preserve-3d;
				animation: animate 25s linear infinite;
			}
			@keyframes animate
				{
					0%
					{
						transform: perspective(1000px) rotateX(0deg) rotate(25deg);
					}
					100%
					{
						transform: perspective(1000px) rotateX(360deg) rotate(25deg);
					}
				}

			.container .box span
			{
				position: absolute;
				color: #fff;
				font-size: 4.5em;
				white-space: nowrap;
				text-transform: uppercase;
				font-weight: 900;
				padding: 0 15px;
				background: linear-gradient(90deg, transparent, rgba(0,0,0,0.5), transparent);
				line-height: 0.80em;
				transform-style: preserve-3d;
				text-shadow: 0 5px rgba(0, 0, 0, 0.25);
				transform: translate(-50%, -50%) rotateX(calc(var(--i) * 22.5deg)) translateZ(145px);
			}
			.container .box span i:nth-child(1)
			{
				font-style: initial;
				color: #ff246f;
			}
			.container .box span i:nth-child(2)
			{
				font-style: initial;
				color: #12b5ff;
			}
        </style>
		
		<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	</head>
<body class="font-sans bg-gray-900 text-white">
<header>
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li class="font-bold">
                    BaseApp
                </li>
                <li class="md:ml-10 mt-3 md:mt-0">
                    @if (Route::has('login'))
                            <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="text-lg text-gray-100">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-lg text-gray-100">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-lg text-gray-100">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </li>
            </ul>
        </div>
    </nav>  
	</header>
	
</div>
@yield('content')
</body>
</html>