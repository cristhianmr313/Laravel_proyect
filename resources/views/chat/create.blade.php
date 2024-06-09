<x-app-layout>



    <form class="bg-white px-8 pt-6 pb-8 mb-4" action="{{route('chat.store')}}" method="POST">
        @csrf
        <div class="mb-4">
          <div class="grid grid-flow-row sm:grid-flow-col gap-3">
            <div class="sm:col-span-4 justify-center">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="nya"> Nombres y Apellidos </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name='name' id="name" type="text" placeholder="nombre" required>
            </div>
            <div class="sm:col-span-4 justify-center">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="email"> Email </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="ejempl@mail.com" required>
            </div>
          </div>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="asunto"> Asunto </label>
          <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="asunto" id="asunto" type="text"  required>
        </div>
        <div class="mb-4">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="mensaje"> Mensaje </label>
          <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="text" id="text" rows="5" placeholder="El mensaje" required></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit"> Aceptar </button>
        </div>
      </form>
</x-app-layout>
