<x-layout>
  <form class="max-w-md flex flex-col gap-4" action="{{ route('register.store') }}" method="POST">
    @csrf
    <x-form-errors />
    <input class='border' type="text" name="name" placeholder="Name">
    <input class="border" type="email" name="email" placeholder="Email">
    <input class="border" type="password" name="password" placeholder="Password">
    <button class="border" type="submit">Register</button>
  </form>
</x-layout>