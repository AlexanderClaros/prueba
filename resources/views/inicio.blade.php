@extends('index')
    @section('content')
    <div class="container flex flex-wrap items-start mt-8 mx-auto">

        <div class="w-full pl-5 lg:pl-2 mb-4 mt-4">
            <h1 class="text-3xl font-extrabold text-white text-center"> SERVICIOS DESTACADOS </h1>
        </div>

        <div class="w-full mx-auto md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2 mr-2">

            <a href="/fuelStation">

                <div class="bg-gray-600 rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300">

                    <figure class="mb-2"><img src="https://cdn-icons-png.flaticon.com/512/8940/8940365.png " alt="" class="h-64 ml-auto mr-auto" /></figure>

                    <div class="rounded-lg p-4 flex flex-col">

                        <div>

                            <h5 class="text-2xl font-bold text-white leading-none text-center"> Estaciones de Servicio </h5>

                            <p class="mt-4 text-white text-justify">
                                Establecimientos dedicados a la venta al público de productos derivados del petróleo a granel y mediante surtidores. 
                                Generalmente se ubican en puntos convenientes de zonas urbanas y próximas a las carreteras, y en ellas, 
                                es posible parar y repostar el combustible de los vehículos, además de regular la presión de los neumáticos, 
                                el agua de refrigeración u otros elementos mecánicos.
                            </p>

                        </div>

                    </div>

                </div>

            </a>

        </div>

        <div class="w-full mx-auto md:w-1/2 lg:w-1/4 pl-5 pr-5 mb-5 lg:pl-2 lg:pr-2 ml-2">

            <a href="/maritimePole">

                <div class="bg-gray-600 rounded-lg m-h-64 p-2 transform hover:-translate-y-2 hover:shadow-xl transition duration-300">

                    <figure class="mb-2"><img src="https://cdn-icons-png.flaticon.com/512/8552/8552053.png" alt="" class="h-64 ml-auto mr-auto" /></figure>

                    <div class="rounded-lg p-4 flex flex-col">

                        <div>

                            <h5 class="text-2xl font-bold text-white leading-none text-center"> Postes Marítimos </h5>

                            <p class="mt-4 text-white text-justify">
                                Puntos de suministro de combustible en puertos y terminales maritimas. 
                                Estos postes marítimos se utilizan para transferir grandes cantidades de combustible 
                                desde buques cisterna a tanques de almacenamiento terrestre o para cargar directamente 
                                combustible en barcos y otras embarcaciones. Suele estar equipados con mangueras y conexiones 
                                para transferir de forma segura y eficiente del combustible.
                            </p>

                        </div>

                    </div>

                </div>

            </a>

        </div>


    </div>
    @endsection