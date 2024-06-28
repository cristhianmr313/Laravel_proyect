<x-app-layout x-data="{open:true}" >

    <div
    x-data="{body: ''}"
    x-show="body.length"
    x-cloak
    x-on:notification.window="body = $event.detail.body; setTimeout(() => body = '', $event.detail.timeout || 2000)"
    class="fixed inset-0 flex px-4 py-6 items-start pointer-events-none"
    x-init="
        @if (session()->has('notification'))
            window.onload = () => {
                window.dispatchEvent(new CustomEvent('notification', {
                    detail: {
                        body: '{{ session('notification') }}',
                        timeout: 3000
                    }
                }))
            }
        @endif
    "
    >
    <div class="w-full flex flex-col items-center space-y-4">
        <div class="max-w-sm w-full bg-gray-900 rounded-lg pointer-events-auto">
            <div class="p-4 flex items-center">
                <div class="ml-2 w-0 flex-1 text-white">
                    <span x-text="body"></span>
                </div>
                <button class="inline-flex text-gray-400" x-on:click="body = ''">
                    <span class="sr-only">Close</span>
                    <span class="text-2xl">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

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
