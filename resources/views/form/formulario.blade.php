<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- {{ __('Dashboard') }} --}}
            {{ __('Formulario') }}
        </h2>
    </x-slot>

    
    <div class="py-12">
        <div>
            <ul class="nav nav-tabs">
                <li><a id="check_afil" aria-selected="true" href="#">Afiliado</a></li>
                <li><a id="check_doc" aria-selected="false" href="#">Documentación</a></li>
            </ul>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-bold text-sm text-red-900 uppercase mb2">Datos del Afiliado</h3>
                    
                    <h4>Datos Personales</h4>
                    <Form method="POST" action="#" novalidate>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <!-- Nombre -->
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-label for="name" :value="__('Nombre(s):')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                            <!-- Paterno -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="paterno" :value="__('Primer Apellido:')" />

                                <x-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="old('paterno')" required autofocus />
                            </div>
                            <!-- Materno -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="materno" :value="__('Segundo Apellido:')" />

                                <x-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')" required autofocus />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <!-- Sexo -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <x-label for="sexo" :value="__('Sexo:')" />
                                <select name="sexo" id="sexo" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                </select>
                            </div>
                            <!-- Fecha de Nacimiento -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="f_nacimiento" :value="__('Fecha de Nacimiento:')" />

                                <x-input id="f_nacimiento" class="block mt-1 w-full" type="date" name="f_nacimiento" :value="old('f_nacimiento')" required autofocus />
                            </div>
                            <!-- Edad -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="edad" :value="__('Edad:')" />

                                <x-input id="edad" class="block mt-1 w-full" type="number" name="edad" :value="old('edad')" required autofocus />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <!-- Clave de Elector -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <x-label for="elector" :value="__('Clave de Elector:')" />

                                <x-input id="elector" class="block mt-1 w-full" type="text" name="elector" :value="old('elector')" required autofocus />
                            </div>
                            <!-- Fecha de Afiliación -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="f_afil" :value="__('Fecha de Afiliación:')" />

                                <x-input id="f_afil" class="block mt-1 w-full" type="date" name="f_afil" :value="old('f_afil')" required autofocus />
                            </div>
                            <!-- Comité -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="comite" :value="__('Comité al que Contiende:')" />
                                <select name="comite" id="comite" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">CMD Mulegé</option>
                                    <option value="2">CMD Loreto</option>
                                    <option value="3">CMD Comondú</option>
                                    <option value="4">CMD La Paz</option>
                                    <option value="5">CMD Los Cabos</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <x-label for="cargo" :value="__('Cargo al que Contiende:')" />
                                <select name="cargo" id="cargo" class="my-5 rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full" disabled>
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Jóvenes</option>
                                    <option value="2">Mujeres</option>
                                    <option value="3">Tercera Edad</option>
                                    <option value="4">Trabajadores</option>
                                    <option value="5">Empresarios</option>
                                </select>
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="rol_1" :value="__('¿Esta Candidatura es Para Cumplir una Cuota o Acción Afirmativa?:')" />
                                <select name="rol_1" id="rol_1" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="rol_2" :value="__('¿A qué Cuota/Acción Afirmativa Cumplirá la Candidatura?:')" />
                                <select name="rol_2" id="rol_2" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full" disabled>
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Afromexicana</option>
                                    <option value="2">Discapacidad</option>
                                    <option value="3">Diversidad Sexual</option>
                                    <option value="4">Joven</option>
                                    <option value="5">Indígena</option>
                                </select>
                            </div>
                        </div>

                            Datos de Contacto para Oír y Recibir Notificaciones
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="name" :value="__('Correo electrónico:')" />
    
                                <x-input id="name" class="block mt-1 w-full" type="email" name="name" :value="old('name')" required autofocus />
                            </div>
                            <!-- Celular -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="paterno" :value="__('Teléfono Celular:')" />
    
                                <x-input id="paterno" class="block mt-1 w-full" type="tel" name="paterno" :value="old('paterno')" required autofocus />
                            </div>
                            <!-- Particular -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="materno" :value="__('Teléfono Particular:')" />
    
                                <x-input id="materno" class="block mt-1 w-full" type="tel" name="materno" :value="old('materno')" required autofocus />
                            </div>
                        </div>

                        Datos del Domicilio
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <!-- Calle -->
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-label for="calle" :value="__('Calle:')" />

                                <x-input id="calle" class="block mt-1 w-full" type="text" name="calle" :value="old('calle')" required autofocus />
                            </div>
                            <!-- Número exterior -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="num_ext" :value="__('Número Exterior:')" />

                                <x-input id="num_ext" class="block mt-1 w-full" type="number" name="num_ext" :value="old('num_ext')" required autofocus />
                            </div>
                            <!-- Número interior -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="num_int" :value="__('Número Interior:')" />

                                <x-input id="num_int" class="block mt-1 w-full" type="number" name="num_int" :value="old('num_int')" required autofocus />
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <!-- Colonia -->
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-label for="colonia" :value="__('Colonia:')" />

                                <x-input id="colonia" class="block mt-1 w-full" type="text" name="colonia" :value="old('colonia')" required autofocus />
                            </div>
                            <!-- Localidad -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="localidad" :value="__('Localidad:')" />

                                <x-input id="localidad" class="block mt-1 w-full" type="text" name="localidad" :value="old('localidad')" required autofocus />
                            </div>
                            <!-- Municipio -->
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="email" :value="__('Municipio:')" />
                                <select name="rol" id="rol" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Mulegé</option>
                                    <option value="2">Loreto</option>
                                    <option value="1">Comondú</option>
                                    <option value="2">La Paz</option>
                                    <option value="2">Los Cabos</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-3">
                            <!-- Código Postal -->
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-label for="cp" :value="__('Código Postal:')" />

                                <x-input id="cp" class="block mt-1 w-full" type="number" name="cp" :value="old('cp')" required autofocus />
                            </div>
                        </div>

                        Interseccionalidad
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <!-- Cargo -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <x-label for="cargo" :value="__('¿Usted se considera de origen Afrodescendiente?:')" />
                                <select name="cargo" id="cargo" class="my-5 rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Si</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="rol_1" :value="__('Diversidad Sexual:')" />
                                <select name="rol_1" id="rol_1" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Ninguna</option>
                                    <option value="2">Lésbico</option>
                                    <option value="3">Gay</option>
                                    <option value="4">Bisexual</option>
                                    <option value="5">Transexual</option>
                                    <option value="6">Transgénero</option>
                                </select>
                            </div>
                            <div class="w-full md:w-1/3 px-3">
                                <x-label for="rol_2" :value="__('Discapacidad:')" />
                                <select name="rol_2" id="rol_2" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
                                    <option value="">--Seleccione una opción--</option>
                                    <option value="1">Ninguna</option>
                                    <option value="2">Física</option>
                                    <option value="3">Mental</option>
                                    <option value="4">Intelectual</option>
                                </select>
                            </div>
                        </div>
                        <x-button class="ml-3">
                            {{ __('Guardar Formulario') }}
                        </x-button>
                    </Form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#check_afil").change(function(){
      if(!$("#check_afil")){
        $('#rol_2').prop('disabled',false);
        $('#rol_2').css({"background-color": "white"});
      }else{
        $('#rol_2').val('');
        $('#rol_2').prop('disabled','disabled');
        $('#rol_2').removeAttr("style");
      }
    });
    </script>

</x-app-layout>