<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Games Tracker</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
     
            <nav class="container mx-auto flex items-center justify-between px-4 py-6">
                <div class="flex items-center">
                    <a href="/" > 
                    <img src="/images/laracasts-logo.svg" alt="Logo" class="w-32 flex-none mr-16">
                    </a>

                    <ul class="flex space-x-8">
                        <li><a href="#" class="hover:text-grey-400"> Games</a></li>
                        <li><a href="#" class="hover:text-grey-400"> Reviews</a></li>
                        <li><a href="#" class="hover:text-grey-400"> Coming soon</a></li>
                   
                    </ul>
                </div>

                <div  class="flex items-center">
                    <div class="relative">
                        <input type="text" class="bg-gray-800 text-sm rounded-full px-3 py-1 w-64 focus:outline-none focus:shadow-outline pl-8" placeholder="Search...">
                       <div class="absolute top-0 flex items-center h-full ml-2">
                           {{-- <svg  class="fill-current text-gray-400 w-4"  viewBox="0 0 24 24" >
                        <path class="heroicon-ui" d="M16.32 14.915.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
                        </svg> --}}<svg width="15" height="15" viewBox="0 0 120 115" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M57.5484 24.5162L40.0178 31.5709V2.72681L25.7481 50.3333L40.0178 44.2793V76.8759L57.5484 24.5162V24.5162ZM35.8438 0.325215L35.5047 1.50099L31.5395 14.7348C21.0263 18.6123 13.5654 28.3938 13.5654 39.8264C13.5654 52.91 22.5133 63.8173 35.3221 66.2189V79.6277C15.0002 77.001 0 60.0648 0 39.8514C0 19.7131 15.6002 3.027 35.8438 0.325215V0.325215ZM117.079 112.199C114.158 115.001 111.053 115.276 109.619 114.826C108.21 114.376 102.549 109.848 93.8618 103.719C85.1748 97.5646 85.0965 94.7878 82.6443 89.5343C80.1921 84.3058 74.7138 78.8772 67.6442 76.4256L65.1137 72.7482C58.6702 76.976 51.2875 79.4776 43.9048 79.9279L44.4526 78.2768L48.6005 65.8936C60.7311 62.9167 69.7051 52.3847 69.7051 39.8264C69.7051 26.1923 59.6876 14.2845 44.6613 13.0336V0C66.3659 1.27584 83.4791 18.6373 83.4791 39.8514C83.4791 48.257 80.5573 56.0371 75.9138 62.4664L79.7226 64.868C82.2791 71.6475 87.94 76.8759 93.3923 79.2275C98.8445 81.579 101.792 81.6541 108.21 89.9846C114.627 98.2901 119.349 103.719 119.819 105.07C120.288 106.42 120.001 109.397 117.079 112.199V112.199ZM114.497 107.721C114.497 106.621 113.558 105.72 112.41 105.72C111.262 105.72 110.323 106.621 110.323 107.721C110.323 108.822 111.262 109.723 112.41 109.723C113.558 109.723 114.497 108.822 114.497 107.721Z" fill="gray"/>
</svg>
                        
                    </div>
                    </div>
                    <div class="ml-6">
                       <a href="#"><img src="/images/avatar.jpg" alt="search avater" class="rounded-full  w-8"></a>
                    </div>

                </div>



                
            </nav>
      
         

    </header>

    <main class="py-8">
            @yield('content')
    </main>


    <footer class="border-t border-grey-800">
       <div class="container mx-auto py-6 px-4">

           <a href="https://www.linkedin.com/in/cw2018/" class="underline hover:text-gray-400 "> Williams Chinwa</a>

       </div>
    </footer>
</body>
</html>