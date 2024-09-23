<nav id="header" class="fixed w-full z-30 top-0 bg-white">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
    <div class="pl-4 flex items-center">
      <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
        <style>
          @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
          }
          .logo-animated {
            animation: pulse 2s infinite;
          }
        </style>
        <img src="./img/logoHI.jpeg" alt="Logo" class="logo-animated" style="width: 130px; height: auto; border: 1px solid black;">
      </a>
    </div>
    <div class="block lg:hidden pr-4">
      <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div>
    <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-white p-4 lg:p-0 z-20" id="nav-content">
      <ul class="list-reset lg:flex justify-end flex-1 items-center">
        <li class="mr-3">
          <a class="inline-block py-2 px-4 text-black font-bold no-underline hover:text-white hover:bg-black rounded-full transition duration-300 ease-in-out" 
             href="https://www.google.com/maps/dir//SH+Mans%C3%B5es+Sobradinho+Condom%C3%ADnio+Serra+Azul+Q+3+HITECH+AUTOMOTIVA+Q1c+lote+8+lojas+1%2F2+-+Sobradinho,+Bras%C3%ADlia+-+DF,+70070-045/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x935a410356ed75ed:0xd3854b607c9bfcac?sa=X&ved=1t:57443&ictx=111">
            <i class="fas fa-map-marker-alt mr-1"></i> Localização
          </a>
        </li>
        <li class="mr-3">
  <a class="inline-block text-black no-underline font-bold hover:text-white hover:bg-black rounded-full py-2 px-4 transition duration-300 ease-in-out" href="https://wa.link/0xx4xu">
    <i class="fas fa-calendar-alt mr-1"></i> Agende o seu horário
  </a>
</li>

      </ul>
      <button id="navAction" class="mx-auto lg:mx-0 bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-black hover:text-white hover:scale-105 duration-300 ease-in-out">
        <a href="https://wa.link/0xx4xu" class="flex items-center">
          <i class="fab fa-whatsapp mr-2"></i> WhatsApp
        </a>
      </button>
    </div>
  </div>
  <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>

