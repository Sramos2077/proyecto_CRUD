<div>
<!-- component -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<div>
    <img src="imgs/Angeles.png" width='200' height="200">
</div>

<!-- ====== Table Section Start -->
<section class="bg-white py-20 lg:py-[120px]">
   <div class="container">
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4">
            <div class="max-w-full overflow-x-auto">
                 <!----boton para la activacion del modal--->
    <x-button wire:click="$set('modalregister', true)">nuevo</x-button>
    <!----Diseño del modal---->
     <x-dialog-modal wire:model="modalregister">
         <x-slot name="title">
           crear nuevos Registros
         </x-slot>

         <x-slot name="content">

        <form>
            <div class="mb-5">
                <label
                  for="name"
                  class="mb-3 block text-base font-black text-[#07074D]">
                  name
                </label>
                <input
                  type="text"
                  name="name"
                  wire:model='name'
                  id="name"
                  placeholder="name"
                  class="w-full rounded-md border border-[#e0e0e0] bg-white py-6 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
                <label
                  for="category"
                  class="mb-3 block text-base font-black text-[#07074D]">
                  category
                </label>
               <select wire:model="category_id">
                    <option value="{{null}}">selecciona una opcion</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
               </select>
               </div>

              <label
              for="quantity"
              class="mb-3 block text-base font-black text-[#07074D]">
              quantity
            </label>
            <input
              type="number"
              name="quantity"
              wire:model='quantity'
              id="quantity"
              placeholder="quantity"
              class="w-full rounded-md border border-[#e0e0e0] bg-white py-6 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
            />
            <label
            for="price"
            class="mb-3 block text-base font-black text-[#07074D]">
            price
          </label>
          <input
            type="number"
            name="price"
            wire:model='price'
            id="price"
            placeholder="price"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-6 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
          />
        </form>
        <x-button wire:click='saveregister'>save</x-button>
        </x-slot>

         <x-slot name="footer">
             <x-button wire:click="$set('modalregister', false)">
                 salir
             </x-button>
         </x-slot>
     </x-dialog-modal>

                <table class="table-auto w-full">
                  <thead>
                     <tr class="bg-primary text-center">
                       <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           border-l border-transparent
                           "
                           >
                           #
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           name
                        </th>
                        <th class="w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           category
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                            quantity
                        </th>
                        <th
                           class="
                           w-1/6
                           min-w-[160px]
                           text-lg
                           font-semibold
                           text-white
                           py-4
                           lg:py-7
                           px-3
                           lg:px-4
                           "
                           >
                           price
                        </th>
                        <th
                        class="
                        w-1/6
                        min-w-[160px]
                        text-lg
                        font-semibold
                        text-white
                        py-4
                        lg:py-7
                        px-3
                        lg:px-4
                        "
                        >
                        Acciones
                     </th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach ($Merchandise as $product)
                    <tr>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-l border-[#E8E8E8]
                           "
                           >
                           {{$product->id}}
                        </td>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           "
                           >
                           {{$product->name}}
                        </td>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-[#F3F6FF]
                           border-b border-[#E8E8E8]
                           ">
                            {{$product->category ? $product->category->name : "Sin categoria" }}
                        </td>
                        <td
                           class="
                           text-center text-dark
                           font-medium
                           text-base
                           py-5
                           px-2
                           bg-white
                           border-b border-[#E8E8E8]
                           "
                           >
                            {{ $product->quantity }}
                        </td>
                        <td
                        class="
                        text-center text-dark
                        font-medium
                        text-base
                        py-5
                        px-2
                        bg-white
                        border-b border-[#E8E8E8]
                        ">
                     {{ $product->price }}
                     </td>
                     <td>
                        <x-button wire:click="editregister({{ $product->id }})">editar</x-button>
                        <x-dialog-modal wire:model="modaledit">
                            <x-slot name="title">editar este registro</x-slot>
                            <x-slot name="content">
                                <form>
                                    <label
                                    for="name"
                                    class="mb-3 block text-base font-black text-[#07074D]">
                                    name
                                  </label>
                                  <input
                                    type="name"
                                    name="name"
                                    wire:model='name'
                                    id="name"
                                    placeholder="name"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-6 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                  />
                                  <label for="category" class="mb-3 block text-base font-black text-[#07074D]">category</label>
                                    <select wire:model="category_id">
                                        <option value="{{null}}">selecciona una opcion</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <label
                                    for="quantity"
                                    class="mb-3 block text-base font-black text-[#07074D]">
                                    quantity
                                  </label>
                                  <input
                                    type="number"
                                    name="quantity"
                                    wire:model='quantity'
                                    id="quantity"
                                    placeholder="quantity"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-6 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                    <label
                                    for="name"
                                    class="mb-3 block text-base font-black text-[#07074D]">
                                    price
                                  </label>
                                  <input
                                    type="number"
                                    name="price"
                                    wire:model='price'
                                    id="price"
                                    placeholder="price"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-6 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
                                </form>
                            <x-button wire:click="updateregister">actualizar</x-button>
                            </x-slot>
                            <x-slot name="footer">
                            <x-button wire:click="$set('modaledit', false)">salir</x-button>
                        </x-slot>
                        </x-dialog-modal>
                        <x-button>borrar</x-button>
                    </td>
                     @endforeach
                     </tr>
                </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== Table Section End -->
</div>
