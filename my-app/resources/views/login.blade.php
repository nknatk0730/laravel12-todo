<x-layout>
  <form class="flex flex-col max-w-md gap-4" action="{{ route('login.attempt') }}" method="POST">
    @csrf
    <x-form-errors />
    <input class='border' type="text" name="username" placeholder="username" />
    {{-- <input class='border' type="email" name="email" placeholder="Email" /> --}}
    <input class='border' type="password" name="password" placeholder="Password" />
    <button class="border" type="submit">Login</button>
  </form>
</x-layout>
