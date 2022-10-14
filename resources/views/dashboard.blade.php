<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  {{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          Mis Vacantes!
          <form action="#" method="post">
            <div class="grid md:grid-cols-3 md:gap-6">
              <!-- Nombre -->
              <div class="relative z-0 mb-6 w-full group">
                <x-label for="name" :value="__('Nombre(s):')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
              </div>
              <!-- Paterno -->
              <div class="relative z-0 mb-6 w-full group">
                <x-label for="paterno" :value="__('Primer Apellido:')" />

                <x-input id="paterno" class="block mt-1 w-full" type="text" name="paterno" :value="old('paterno')" required autofocus />
              </div>
              <!-- Paterno -->
              <div class="relative z-0 mb-6 w-full group">
                <x-label for="materno" :value="__('Segundo Apellido:')" />

                <x-input id="materno" class="block mt-1 w-full" type="text" name="materno" :value="old('materno')" required autofocus />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> --}}
  <p style="display: block">HOLA</p>

  <form action="">
    <div class="px-20 py-10">
      <div class="flex -mx-2">
        <div class="w-1/3 px-2">
          <x-label :value="__('Nombre(s):')"/>
          <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('materno')" required autofocus />
        </div>
        <div class="w-1/3 px-2">
          <x-label :value="__('Primer Apellido:')"/>
          <x-input id="paterno" class="block mt-1 w-full" type="text" required autofocus></x-input>
        </div>
        <div class="w-1/3 px-2">
          <x-label :value="__('Segundo Apellido:')"/>
          <x-input class="block mt-1 w-full" type="text"></x-input>
        </div>
      </div>
      <div class="flex -mx-2">
        <div class="w-full md:w-1/2 px-3">
          <x-label for="rol_1" :value="__('¿Esta Candidatura es Para Cumplir una Cuota o Acción Afirmativa?:')" />
          <select name="rol_1" id="rol_1" class="rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full">
              <option value="">--Seleccione una opción--</option>
              <option value="1">Si</option>
              <option value="2">No</option>
          </select>
        </div>
        <div class="w-full md:w-1/2 px-3">
          <x-label for="rol_2" :value="__('¿A qué Cuota/Acción Afirmativa Cumplirá la Candidatura?:')" />
          <select name="rol_2" id="rol_2" class="rounded-md bg-gray-400 shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50 w-full" disabled>
              <option value="">--Seleccione una opción--</option>
              <option value="1">Afromexicana</option>
              <option value="2">Discapacidad</option>
              <option value="3">Diversidad Sexual</option>
              <option value="4">Joven</option>
              <option value="5">Indígena</option>
          </select>
        </div>
      </div>
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-1.6.2.min.js"></script>
  <script>
    $("#rol_1").change(function(){
      if($("#rol_1").val() === "1"){
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