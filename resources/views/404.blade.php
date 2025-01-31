<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Eror 404</title>
         <script src="https://cdn.tailwindcss.com"></script>

        <style>
            @font-face {
                font-family: GillSans;
                src: url(assets/fonts/GillSansBold.woff) format("woff");
            }
            * {
                margin: 0px;
                padding: 0px;
                box-sizing: border-box;
                -webkit-user-select: none; /* Safari */
                -ms-user-select: none; /* IE 10 and IE 11 */
                user-select: none;
            }
        </style>
    </head>
    <body class="overflow-hidden">
        <div class="flex items-center justify-center gap-2.5 h-screen w-full flex-col font-[GillSans]">
            <div><h1 class="relative text-[22vw] md:text-[15vw] font-bold bg-[url('assets/img/404/Galaxy.jpg')] bg-cover [-webkit-text-fill-color:transparent] [-webkit-background-clip:text] [background-clip:text]">Oops!</h1></div>
            <div><h3 class="font-[''] relative md:mt-5 text-[3.5vw] lg:text-[1.5vw] md:text-[2vw] tracking-[1.8px]">404 - Page {{ $name }} Not Found</h3></div>
            {{-- <a href="/Abol" class="text-center py-3 px-6 md:px-[46px] text-xs md:text-[16px] font-[''] md:font-[GillSans] mt-[0.5rem] md:mt-10 border-0 bg-[#8750f7] rounded-lg md:rounded-[20px] text-white uppercase cursor-pointer no-underline">Go to Home Page</a> --}}
        </div>
    </body>
</html>
