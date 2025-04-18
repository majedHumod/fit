<div class="p-6">
    <h2 class="text-xl font-bold">إدارة المستخدمين</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 mt-2">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="store" class="mt-4">
        <input type="text" wire:model="name" placeholder="الاسم" class="border p-2 rounded w-full mb-2">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

        <input type="email" wire:model="email" placeholder="البريد الإلكتروني" class="border p-2 rounded w-full mb-2">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">إضافة مستخدم</button>
    </form>

    <hr class="my-4">

    <h3 class="text-lg font-semibold">قائمة المستخدمين</h3>
    <ul>
        @foreach ($users as $user)
            <li class="flex justify-between items-center border-b py-2">
                {{ $user->name }} - {{ $user->email }}
                <button wire:click="delete({{ $user->id }})" class="bg-red-500 text-white px-2 py-1 rounded">حذف</button>
            </li>
        @endforeach
    </ul>
</div>
